<?php

namespace Tests\Feature\Feature\Seo;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageSeoMetaTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_can_create_page_seo_meta(): void
    {
        $token = $this->user->createToken('test', ['seo:write'])->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
        ])->postJson('/api/seo/meta', [
            'page' => '/',
            'title' => 'Test Title',
            'description' => 'Test description for SEO',
            'keywords' => ['srt', 'cdn', 'broadcast'],
            'og_title' => 'OG Test Title',
            'canonical_url' => 'https://amtecco.com',
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure(['message', 'data']);

        $this->assertDatabaseHas('page_seo_meta', [
            'page' => '/',
            'title' => 'Test Title',
        ]);
    }

    public function test_validates_title_length(): void
    {
        $token = $this->user->createToken('test', ['seo:write'])->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
            'Accept' => 'application/json',
        ])->postJson('/api/seo/meta', [
            'page' => '/',
            'title' => str_repeat('a', 61), // Too long
            'description' => 'Test description',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors('title');
    }
}
