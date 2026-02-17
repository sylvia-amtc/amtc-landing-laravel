<?php

namespace Tests\Feature;

use Tests\TestCase;

class TermsPageTest extends TestCase
{
    public function test_terms_page_returns_200(): void
    {
        $response = $this->get('/terms');
        $response->assertStatus(200);
    }

    public function test_terms_page_contains_company_info(): void
    {
        $response = $this->get('/terms');
        $response->assertSee('Amtecco');
        $response->assertSee('BE0748.398.550');
    }

    public function test_terms_page_contains_service_terms(): void
    {
        $response = $this->get('/terms');
        $response->assertSee('Terms of Service');
        $response->assertSee('Acceptable Use');
        $response->assertSee('Limitation of Liability');
    }

    public function test_terms_page_mentions_belgian_law(): void
    {
        $response = $this->get('/terms');
        $response->assertSee('laws of Belgium');
        $response->assertSee('jurisdiction of the courts of Belgium');
    }

    public function test_terms_page_uses_app_layout(): void
    {
        $response = $this->get('/terms');
        $response->assertSee('</html>', false);
    }
}
