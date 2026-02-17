<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_returns_200(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_home_page_has_gradient_heading(): void
    {
        $response = $this->get('/');
        $response->assertSee('SRT Cloud Distribution', false);
        $response->assertSee('gradient-text', false);
    }

    public function test_home_page_has_problem_section_with_four_cards(): void
    {
        $response = $this->get('/');
        $response->assertSee('Crushing Costs', false);
        $response->assertSee('Endless Setup', false);
        $response->assertSee('Vendor Chaos', false);
        $response->assertSee('Weather Roulette', false);
    }

    public function test_home_page_has_cta_buttons_linking_to_get_started(): void
    {
        $response = $this->get('/');
        $response->assertSee('href="#get-started"', false);
    }

    public function test_home_page_uses_app_layout(): void
    {
        $response = $this->get('/');
        $response->assertSee('</html>', false);
        $response->assertSee('bg-brand-bg', false);
    }

    public function test_home_page_has_anchor_links(): void
    {
        $response = $this->get('/');
        $response->assertSee('#solutions', false);
        $response->assertSee('#compare', false);
        $response->assertSee('#resources', false);
        $response->assertSee('#get-started', false);
    }

    public function test_home_page_has_trust_bar(): void
    {
        $response = $this->get('/');
        $response->assertSee('Broadcasters', false);
        $response->assertSee('Teleport Operators', false);
    }
}
