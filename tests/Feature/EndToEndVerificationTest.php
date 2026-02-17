<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EndToEndVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_get_routes_return_200(): void
    {
        $routes = [
            '/',
            '/privacy',
            '/terms',
            '/blog/satellite-vs-srt-cost',
            '/blog/srt-distribution-guide',
            '/blog/cdn-vs-broadcast-cdn',
            '/blog/satellite-to-ip-migration',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200, "Route $route failed");
        }
    }

    public function test_lead_form_end_to_end(): void
    {
        $payload = [
            'name' => 'E2E Test User',
            'email' => 'e2e@test.com',
            'company' => 'Test Corp',
            'distribution_points' => 50,
            'message' => 'End to end test',
        ];

        $response = $this->postJson('/api/leads', $payload);
        $response->assertStatus(201);

        $this->assertDatabaseHas('leads', [
            'name' => 'E2E Test User',
            'email' => 'e2e@test.com',
            'company' => 'Test Corp',
        ]);
    }

    public function test_lead_api_rejects_invalid_data(): void
    {
        $this->postJson('/api/leads', [])->assertStatus(422);
        $this->postJson('/api/leads', ['name' => 'x'])->assertStatus(422);
    }

    public function test_all_pages_have_meta_viewport(): void
    {
        $routes = ['/', '/privacy', '/terms', '/blog/satellite-vs-srt-cost'];
        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertSee('viewport', false);
        }
    }

    public function test_build_manifest_has_all_assets(): void
    {
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $this->assertNotEmpty($manifest);
        
        $files = array_column($manifest, 'file');
        $hasJs = false;
        $hasCss = false;
        foreach ($files as $file) {
            if (str_ends_with($file, '.js')) $hasJs = true;
            if (str_ends_with($file, '.css')) $hasCss = true;
        }
        $this->assertTrue($hasJs, 'Manifest missing JS');
        $this->assertTrue($hasCss, 'Manifest missing CSS');
    }

    public function test_home_page_has_responsive_classes(): void
    {
        $response = $this->get('/');
        $content = $response->getContent();
        
        // Check for responsive breakpoint classes (md:, lg:, sm:)
        $this->assertMatchesRegularExpression('/\b(sm|md|lg|xl):/', $content);
    }
}
