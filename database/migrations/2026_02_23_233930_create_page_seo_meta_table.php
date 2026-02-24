<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_seo_meta', function (Blueprint $table) {
            $table->id();
            $table->string('page')->unique();
            $table->string('title', 60);
            $table->string('description', 160);
            $table->json('keywords')->nullable();
            $table->string('og_title', 60)->nullable();
            $table->string('og_description', 160)->nullable();
            $table->string('og_image')->nullable();
            $table->string('twitter_card')->default('summary_large_image');
            $table->string('canonical_url')->nullable();
            $table->string('robots')->default('index,follow');
            $table->json('structured_data')->nullable();
            $table->timestamps();

            $table->index('page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_seo_meta');
    }
};
