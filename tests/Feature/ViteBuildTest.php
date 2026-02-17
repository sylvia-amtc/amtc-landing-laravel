<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViteBuildTest extends TestCase
{
    public function test_vite_manifest_exists(): void
    {
        $this->assertFileExists(public_path('build/manifest.json'));
    }

    public function test_vite_manifest_contains_app_css(): void
    {
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $this->assertNotNull($manifest);

        // Check that CSS entry exists in manifest
        $hasCss = false;
        foreach ($manifest as $key => $entry) {
            if (str_contains($key, 'app.css') || (isset($entry['css']) && count($entry['css']) > 0)) {
                $hasCss = true;
                break;
            }
        }
        $this->assertTrue($hasCss, 'Vite manifest should contain CSS entry');
    }

    public function test_vite_manifest_contains_app_js(): void
    {
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $this->assertNotNull($manifest);

        $hasJs = false;
        foreach ($manifest as $key => $entry) {
            if (str_contains($key, 'app.js')) {
                $hasJs = true;
                break;
            }
        }
        $this->assertTrue($hasJs, 'Vite manifest should contain JS entry');
    }

    public function test_app_css_contains_brand_colors(): void
    {
        $css = file_get_contents(resource_path('css/app.css'));
        $this->assertStringContainsString('--color-brand-bg', $css);
        $this->assertStringContainsString('--color-brand-surface', $css);
        $this->assertStringContainsString('--color-brand-accent', $css);
        $this->assertStringContainsString('--color-brand-text', $css);
        $this->assertStringContainsString('--color-brand-muted', $css);
        $this->assertStringContainsString('#0f1117', $css);
        $this->assertStringContainsString('#6366f1', $css);
    }

    public function test_app_css_contains_custom_classes(): void
    {
        $css = file_get_contents(resource_path('css/app.css'));
        $this->assertStringContainsString('.gradient-text', $css);
        $this->assertStringContainsString('.glow', $css);
        $this->assertStringContainsString('.card-hover', $css);
        $this->assertStringContainsString('.pulse-badge', $css);
        $this->assertStringContainsString('.fade-in', $css);
    }

    public function test_env_example_contains_tracking_ids(): void
    {
        $env = file_get_contents(base_path('.env.example'));
        $this->assertStringContainsString('GTM_ID', $env);
        $this->assertStringContainsString('GA4_ID', $env);
        $this->assertStringContainsString('HOTJAR_ID', $env);
    }
}
