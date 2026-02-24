<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $fillable = [
        'from_path',
        'to_path',
        'status_code',
        'is_active',
        'hits',
        'last_hit_at',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'last_hit_at' => 'datetime',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
