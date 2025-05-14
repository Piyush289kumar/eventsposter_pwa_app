<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frame extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image_path',
        'status',
        'is_premium',
        'user_id',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_premium' => 'boolean',
    ];
}
