<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{


    public function index()
    {
        $plans = Plan::all();
        $user = Auth::user(); // Get current logged-in user

        return view('layouts.core.pages.plans', [
            'user' => $user,
            'plans' => $plans,
        ]);


    }

    public function subscribe(Request $request, $planId)
    {
        $plan = Plan::findOrFail($planId);
        $user = Auth::user();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $subscription = $api->subscription->create([
            'plan_id' => $plan->razorpay_plan_id,
            'customer_notify' => 1,
            'total_count' => 12,
        ]);

        // Save temporary subscription in DB
        Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'razorpay_subscription_id' => $subscription['id'],
            'status' => 'created',
        ]);

        // Redirect to Razorpay checkout
        return view('checkout', [
            'subscription_id' => $subscription['id'],
            'user' => $user,
            'plan' => $plan,
            'razorpay_key' => env('RAZORPAY_KEY'),
        ]);
    }

    public function callback(Request $request)
    {
        // Handle payment confirmation here
        // Verify payment signature and update subscription
    }
}
