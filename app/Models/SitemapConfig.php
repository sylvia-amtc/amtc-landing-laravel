<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SitemapConfig extends Model
{
    protected $fillable = [
        'page',
        'changefreq',
        'priority',
        'include',
        'last_modified',
    ];

    protected function casts(): array
    {
        return [
            'include' => 'boolean',
            'priority' => 'decimal:1',
            'last_modified' => 'datetime',
        ];
    }
}
