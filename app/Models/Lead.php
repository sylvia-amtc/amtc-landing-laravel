<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company',
        'role',
        'interest',
        'distribution_points',
        'utm_source',
        'utm_medium',
        'utm_campaign',
    ];
}
