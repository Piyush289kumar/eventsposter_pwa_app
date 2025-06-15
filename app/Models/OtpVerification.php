<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class OtpVerification extends Model
{

    protected $fillable = ['phone', 'otp', 'expires_at'];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public $timestamps = true;

    public function isExpired()
    {
        return Carbon::now()->gt($this->expires_at);
    }
}
