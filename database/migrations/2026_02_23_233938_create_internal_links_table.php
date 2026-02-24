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
        Schema::create('internal_links', function (Blueprint $table) {
            $table->id();
            $table->string('from_page');
            $table->string('to_page');
            $table->string('anchor_text');
            $table->text('context')->nullable();
            $table->integer('position')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['from_page', 'is_active']);
            $table->index('to_page');
            $table->unique(['from_page', 'to_page', 'anchor_text']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_links');
    }
};
