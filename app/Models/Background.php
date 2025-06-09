<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Background extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image_path',        
        'event_date',
        'status',
        'is_premium',
        'user_category_id',
        'caption'
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_premium' => 'boolean',
    ];

    public function categories()
    {
        return $this->belongsToMany(UserCategory::class, 'background_user_category');
    }

}
