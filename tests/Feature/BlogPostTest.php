<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogPostTest extends TestCase
{
    public function test_satellite_vs_srt_cost_returns_200(): void
    {
        $response = $this->get('/blog/satellite-vs-srt-cost');
        $response->assertStatus(200);
    }

    public function test_srt_distribution_guide_returns_200(): void
    {
        $response = $this->get('/blog/srt-distribution-guide');
        $response->assertStatus(200);
    }

    public function test_satellite_vs_srt_cost_has_article_content(): void
    {
        $response = $this->get('/blog/satellite-vs-srt-cost');
        $response->assertSee('Satellite vs SRT: Real Cost Comparison for TV Channels');
        $response->assertSee('transponder');
        $response->assertSee('SRT');
    }

    public function test_srt_distribution_guide_has_article_content(): void
    {
        $response = $this->get('/blog/srt-distribution-guide');
        $response->assertSee('SRT Distribution: Complete Guide for Broadcast Engineers');
        $response->assertSee('ARQ');
        $response->assertSee('latency');
    }

    public function test_blog_posts_have_cta_to_landing_page(): void
    {
        foreach (['/blog/satellite-vs-srt-cost', '/blog/srt-distribution-guide'] as $url) {
            $response = $this->get($url);
            $response->assertSee('Get Started');
            $response->assertSee('#lead-form');
        }
    }

    public function test_blog_posts_use_blog_layout(): void
    {
        foreach (['/blog/satellite-vs-srt-cost', '/blog/srt-distribution-guide'] as $url) {
            $response = $this->get($url);
            $response->assertSee('<article', false);
            $response->assertSee('Ready to Replace Satellite with SRT?');
        }
    }

    public function test_satellite_vs_srt_cost_has_800_plus_words(): void
    {
        $response = $this->get('/blog/satellite-vs-srt-cost');
        $content = strip_tags($response->getContent());
        $wordCount = str_word_count($content);
        $this->assertGreaterThanOrEqual(800, $wordCount, "Post has {$wordCount} words, expected 800+");
    }

    public function test_srt_distribution_guide_has_800_plus_words(): void
    {
        $response = $this->get('/blog/srt-distribution-guide');
        $content = strip_tags($response->getContent());
        $wordCount = str_word_count($content);
        $this->assertGreaterThanOrEqual(800, $wordCount, "Post has {$wordCount} words, expected 800+");
    }
}
