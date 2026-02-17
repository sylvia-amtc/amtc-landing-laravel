<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogPostBatch2Test extends TestCase
{
    public function test_cdn_vs_broadcast_cdn_returns_200(): void
    {
        $response = $this->get('/blog/cdn-vs-broadcast-cdn');
        $response->assertStatus(200);
    }

    public function test_satellite_to_ip_migration_returns_200(): void
    {
        $response = $this->get('/blog/satellite-to-ip-migration');
        $response->assertStatus(200);
    }

    public function test_cdn_vs_broadcast_cdn_has_article_content(): void
    {
        $response = $this->get('/blog/cdn-vs-broadcast-cdn');
        $response->assertSee('Why Traditional CDNs Fail for Professional Live Feeds');
        $response->assertSee('latency');
        $response->assertSee('broadcast');
    }

    public function test_satellite_to_ip_migration_has_article_content(): void
    {
        $response = $this->get('/blog/satellite-to-ip-migration');
        $response->assertSee('How to Migrate from Satellite to IP in 24 Hours');
        $response->assertSee('SRT');
        $response->assertSee('migration');
    }

    public function test_cdn_vs_broadcast_cdn_has_800_plus_words(): void
    {
        $response = $this->get('/blog/cdn-vs-broadcast-cdn');
        $content = strip_tags($response->getContent());
        $wordCount = str_word_count($content);
        $this->assertGreaterThanOrEqual(800, $wordCount, "Post has {$wordCount} words, expected 800+");
    }

    public function test_satellite_to_ip_migration_has_800_plus_words(): void
    {
        $response = $this->get('/blog/satellite-to-ip-migration');
        $content = strip_tags($response->getContent());
        $wordCount = str_word_count($content);
        $this->assertGreaterThanOrEqual(800, $wordCount, "Post has {$wordCount} words, expected 800+");
    }

    public function test_cdn_vs_broadcast_cdn_has_cta(): void
    {
        $response = $this->get('/blog/cdn-vs-broadcast-cdn');
        $content = $response->getContent();
        $this->assertStringContainsString('href="/"', $content);
    }

    public function test_satellite_to_ip_migration_has_cta(): void
    {
        $response = $this->get('/blog/satellite-to-ip-migration');
        $content = $response->getContent();
        $this->assertStringContainsString('href="/"', $content);
    }
}
