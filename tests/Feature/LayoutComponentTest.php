<?php

namespace Tests\Feature;

use Tests\TestCase;

class LayoutComponentTest extends TestCase
{
    public function test_layout_file_exists(): void
    {
        $this->assertFileExists(resource_path('views/layouts/app.blade.php'));
    }

    public function test_header_component_exists(): void
    {
        $this->assertFileExists(resource_path('views/components/header.blade.php'));
    }

    public function test_footer_component_exists(): void
    {
        $this->assertFileExists(resource_path('views/components/footer.blade.php'));
    }

    public function test_layout_contains_vite_directive(): void
    {
        $layout = file_get_contents(resource_path('views/layouts/app.blade.php'));
        $this->assertStringContainsString('@vite', $layout);
    }

    public function test_header_renders_nav_links(): void
    {
        $header = file_get_contents(resource_path('views/components/header.blade.php'));
        $this->assertStringContainsString('Solutions', $header);
        $this->assertStringContainsString('Compare', $header);
        $this->assertStringContainsString('Resources', $header);
        $this->assertStringContainsString('Get Started', $header);
        $this->assertStringContainsString('mobile-menu', $header);
    }

    public function test_footer_renders_company_info(): void
    {
        $footer = file_get_contents(resource_path('views/components/footer.blade.php'));
        $this->assertStringContainsString('amtc.tv', $footer);
        $this->assertStringContainsString('Amtecco', $footer);
        $this->assertStringContainsString('BE0748.398.550', $footer);
        $this->assertStringContainsString('Privacy Policy', $footer);
        $this->assertStringContainsString('Terms', $footer);
        $this->assertStringContainsString('LinkedIn', $footer);
    }

    public function test_analytics_scripts_hidden_without_env_vars(): void
    {
        config(['services.gtm.id' => null, 'services.ga4.id' => null, 'services.hotjar.id' => null]);

        $html = view('test-layout')->render();

        $this->assertStringNotContainsString('googletagmanager.com/gtm.js', $html);
        $this->assertStringNotContainsString('gtag(', $html);
        $this->assertStringNotContainsString('hotjar.com', $html);
    }

    public function test_analytics_scripts_shown_with_env_vars(): void
    {
        config(['services.gtm.id' => 'GTM-TEST123', 'services.ga4.id' => 'G-TEST456', 'services.hotjar.id' => '789']);

        $html = view('test-layout')->render();

        $this->assertStringContainsString('GTM-TEST123', $html);
        $this->assertStringContainsString('G-TEST456', $html);
        $this->assertStringContainsString('789', $html);
    }

    public function test_layout_contains_schema_org(): void
    {
        $layout = file_get_contents(resource_path('views/layouts/app.blade.php'));
        $this->assertStringContainsString('schema.org', $layout);
        $this->assertStringContainsString('Organization', $layout);
    }

    public function test_view_cache_succeeds(): void
    {
        $exitCode = \Artisan::call('view:cache');
        $this->assertEquals(0, $exitCode);

        // Clean up
        \Artisan::call('view:clear');
    }
}
