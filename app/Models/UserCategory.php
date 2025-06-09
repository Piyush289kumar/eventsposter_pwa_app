<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    protected $table = 'user_categories'; // add this if missing
    protected $fillable = [
        'name',
    ];

    public function backgrounds()
    {
        return $this->belongsToMany(Background::class, 'background_user_category');
    }

}
