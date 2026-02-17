<?php

namespace Tests\Feature;

use Tests\TestCase;

class SolutionsComparisonTest extends TestCase
{
    public function test_homepage_returns_200(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_solutions_section_exists(): void
    {
        $response = $this->get('/');
        $response->assertSee('id="solutions"', false);
        $response->assertSee('Two ways to reach the world');
    }

    public function test_srt_distribution_card(): void
    {
        $response = $this->get('/');
        $response->assertSee('SRT Distribution');
        $response->assertSee('Available Now');
        $response->assertSee('€129.99');
        $response->assertSee('95% cost savings vs satellite');
        $response->assertSee('Start Distributing');
    }

    public function test_broadcast_cdn_card(): void
    {
        $response = $this->get('/');
        $response->assertSee('Broadcast CDN');
        $response->assertSee('Coming Soon');
        $response->assertSee('Purpose-built for live HLS/DASH delivery');
        $response->assertSee('Join the Waitlist');
    }

    public function test_comparison_section_exists(): void
    {
        $response = $this->get('/');
        $response->assertSee('id="compare"', false);
        $response->assertSee('Why settle for less?');
    }

    public function test_comparison_table_content(): void
    {
        $response = $this->get('/');
        $response->assertSee('Amtecco SRT');
        $response->assertSee('Traditional Satellite');
        $response->assertSee('Haivision');
        $response->assertSee('Zixi');
        $response->assertSee('Akamai');
        $response->assertSee('Recommended');
    }

    public function test_cross_sell_banner(): void
    {
        $response = $this->get('/');
        $response->assertSee('One vendor. One SLA.');
    }
}
