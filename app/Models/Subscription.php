<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'razorpay_subscription_id',
        'status',
        'start_at',
        'end_at',
    ];

    // 👇 Define the relationship with the Plan model
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    // 👇 Define the relationship with the User model (optional, but recommended)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
