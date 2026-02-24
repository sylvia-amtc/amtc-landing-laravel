<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeoMeta extends Model
{
    protected $table = 'page_seo_meta';

    protected $fillable = [
        'page',
        'title',
        'description',
        'keywords',
        'og_title',
        'og_description',
        'og_image',
        'twitter_card',
        'canonical_url',
        'robots',
        'structured_data',
    ];

    protected function casts(): array
    {
        return [
            'keywords' => 'array',
            'structured_data' => 'array',
        ];
    }
}
