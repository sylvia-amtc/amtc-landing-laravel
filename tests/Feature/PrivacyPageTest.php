<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPageTest extends TestCase
{
    public function test_privacy_page_returns_200(): void
    {
        $response = $this->get('/privacy');
        $response->assertStatus(200);
    }

    public function test_privacy_page_contains_company_name(): void
    {
        $response = $this->get('/privacy');
        $response->assertSee('Amtecco');
    }

    public function test_privacy_page_contains_vat_number(): void
    {
        $response = $this->get('/privacy');
        $response->assertSee('BE0748.398.550');
    }

    public function test_privacy_page_mentions_gdpr(): void
    {
        $response = $this->get('/privacy');
        $response->assertSee('GDPR');
    }

    public function test_privacy_page_uses_app_layout(): void
    {
        $response = $this->get('/privacy');
        $response->assertSee('</html>', false);
    }
}
