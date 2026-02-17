<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_contains_lead_form(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('id="get-started"', false);
        $response->assertSee('id="lead-form"', false);
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="company"', false);
        $response->assertSee('name="role"', false);
        $response->assertSee('name="interest"', false);
        $response->assertSee('name="distribution_points"', false);
    }

    public function test_form_has_utm_hidden_fields(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('name="utm_source"', false);
        $response->assertSee('name="utm_medium"', false);
        $response->assertSee('name="utm_campaign"', false);
    }

    public function test_form_has_csrf_meta_tag(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('meta name="csrf-token"', false);
    }

    public function test_lead_form_submission_success(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'role' => 'CTO',
            'interest' => 'SRT Distribution',
            'distribution_points' => 5,
        ]);

        $response->assertStatus(201);
        $response->assertJsonFragment(['message' => "Thank you! We'll be in touch soon."]);

        $this->assertDatabaseHas('leads', [
            'name' => 'John Smith',
            'email' => 'john@example.com',
        ]);
    }

    public function test_lead_form_submission_with_utm(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'utm_source' => 'google',
            'utm_medium' => 'cpc',
            'utm_campaign' => 'broadcast2024',
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('leads', [
            'email' => 'jane@example.com',
            'utm_source' => 'google',
            'utm_medium' => 'cpc',
            'utm_campaign' => 'broadcast2024',
        ]);
    }

    public function test_lead_form_validation_errors(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => '',
            'email' => 'not-an-email',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'email']);
    }

    public function test_form_submit_button_exists(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Get Started', false);
        $response->assertSee('id="submit-btn"', false);
    }
}
