<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_lead_with_valid_data_returns_201(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'role' => 'CTO',
            'interest' => 'distribution',
            'distribution_points' => 500,
            'utm_source' => 'google',
            'utm_medium' => 'cpc',
            'utm_campaign' => 'launch',
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure(['message', 'lead'])
            ->assertJson(['message' => "Thank you! We'll be in touch soon."]);
    }

    public function test_lead_is_stored_in_database(): void
    {
        $this->postJson('/api/leads', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $this->assertDatabaseHas('leads', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);
    }

    public function test_invalid_email_returns_422(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'John Doe',
            'email' => 'not-an-email',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    }

    public function test_missing_name_returns_422(): void
    {
        $response = $this->postJson('/api/leads', [
            'email' => 'john@example.com',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['name']);
    }

    public function test_missing_email_returns_422(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'John Doe',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    }

    public function test_distribution_points_must_be_integer(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'distribution_points' => 'not-a-number',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['distribution_points']);
    }

    public function test_optional_fields_can_be_omitted(): void
    {
        $response = $this->postJson('/api/leads', [
            'name' => 'Minimal User',
            'email' => 'minimal@example.com',
        ]);

        $response->assertStatus(201);

        $lead = Lead::where('email', 'minimal@example.com')->first();
        $this->assertNotNull($lead);
        $this->assertNull($lead->company);
    }
}
