<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternalLink extends Model
{
    protected $fillable = [
        'from_page',
        'to_page',
        'anchor_text',
        'context',
        'position',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
