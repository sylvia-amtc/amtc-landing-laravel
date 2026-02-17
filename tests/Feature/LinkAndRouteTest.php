<?php

namespace Tests\Feature;

use Tests\TestCase;

class LinkAndRouteTest extends TestCase
{
    public function test_home_page_returns_200(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_privacy_page_returns_200(): void
    {
        $response = $this->get('/privacy');
        $response->assertStatus(200);
    }

    public function test_terms_page_returns_200(): void
    {
        $response = $this->get('/terms');
        $response->assertStatus(200);
    }

    public function test_blog_satellite_vs_srt_cost_returns_200(): void
    {
        $response = $this->get('/blog/satellite-vs-srt-cost');
        $response->assertStatus(200);
    }

    public function test_blog_srt_distribution_guide_returns_200(): void
    {
        $response = $this->get('/blog/srt-distribution-guide');
        $response->assertStatus(200);
    }

    public function test_blog_cdn_vs_broadcast_cdn_returns_200(): void
    {
        $response = $this->get('/blog/cdn-vs-broadcast-cdn');
        $response->assertStatus(200);
    }

    public function test_blog_satellite_to_ip_migration_returns_200(): void
    {
        $response = $this->get('/blog/satellite-to-ip-migration');
        $response->assertStatus(200);
    }

    public function test_home_page_contains_section_anchors(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $content = $response->getContent();
        $this->assertStringContainsString('id="solutions"', $content);
        $this->assertStringContainsString('id="compare"', $content);
        $this->assertStringContainsString('id="resources"', $content);
        $this->assertStringContainsString('id="get-started"', $content);
    }

    public function test_home_page_has_no_broken_hash_links(): void
    {
        $response = $this->get('/');
        $content = $response->getContent();
        // The only href="#" should not exist (we fixed the ROI report link)
        $this->assertStringNotContainsString('href="#"', $content);
    }

    public function test_footer_links_to_privacy_and_terms(): void
    {
        $response = $this->get('/');
        $content = $response->getContent();
        $this->assertStringContainsString('/privacy', $content);
        $this->assertStringContainsString('/terms', $content);
    }

    public function test_home_page_links_to_all_blog_posts(): void
    {
        $response = $this->get('/');
        $content = $response->getContent();
        $this->assertStringContainsString('/blog/satellite-vs-srt-cost', $content);
        $this->assertStringContainsString('/blog/srt-distribution-guide', $content);
        $this->assertStringContainsString('/blog/cdn-vs-broadcast-cdn', $content);
        $this->assertStringContainsString('/blog/satellite-to-ip-migration', $content);
    }

    public function test_vite_assets_include_app_js(): void
    {
        // Verify the layout references app.js via Vite
        $layoutContent = file_get_contents(resource_path('views/layouts/app.blade.php'));
        $this->assertStringContainsString('resources/js/app.js', $layoutContent);
    }

    public function test_app_js_has_intersection_observer(): void
    {
        $jsContent = file_get_contents(resource_path('js/app.js'));
        $this->assertStringContainsString('IntersectionObserver', $jsContent);
        $this->assertStringContainsString('fade-in', $jsContent);
        $this->assertStringContainsString('initSmoothScroll', $jsContent);
    }
}
