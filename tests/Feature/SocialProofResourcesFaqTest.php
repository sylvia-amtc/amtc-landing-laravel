<?php

namespace Tests\Feature;

use Tests\TestCase;

class SocialProofResourcesFaqTest extends TestCase
{
    public function test_home_returns_200(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_resources_section_has_id(): void
    {
        $response = $this->get('/');
        $response->assertSee('id="resources"', false);
    }

    public function test_resources_section_has_four_blog_links(): void
    {
        $response = $this->get('/');
        $response->assertSee('/blog/satellite-vs-srt-cost', false);
        $response->assertSee('/blog/srt-distribution-guide', false);
        $response->assertSee('/blog/cdn-vs-broadcast-cdn', false);
        $response->assertSee('/blog/satellite-to-ip-migration', false);
    }

    public function test_social_proof_section_renders(): void
    {
        $response = $this->get('/');
        $response->assertSee('Built for broadcasters. By broadcasters.', false);
        $response->assertSee('95%', false);
        $response->assertSee('99.9%', false);
    }

    public function test_faq_section_renders(): void
    {
        $response = $this->get('/');
        $response->assertSee('Frequently Asked Questions', false);
        $response->assertSee('How much does SRT distribution cost?', false);
        $response->assertSee('What is SRT?', false);
    }

    public function test_blog_routes_return_200(): void
    {
        $slugs = [
            'satellite-vs-srt-cost',
            'srt-distribution-guide',
        ];

        foreach ($slugs as $slug) {
            $response = $this->get("/blog/{$slug}");
            $response->assertStatus(200);
        }
    }
}
