<?php
// app/Http/Controllers/SubscriptionController.php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        $user = Auth::user();

        return view('layouts.core.pages.plans', [
            'user' => $user,
            'plans' => $plans,
        ]);
    }

    public function subscribe(Request $request, $planId)
    {
        $plan = Plan::findOrFail($planId);
        $user = Auth::user();

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        $subscription = $api->subscription->create([
            'plan_id' => $plan->razorpay_plan_id,
            'customer_notify' => 1,
            'total_count' => 12,
        ]);

        Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'razorpay_subscription_id' => $subscription['id'],
            'status' => 'created',
        ]);

        return redirect()->route('plans')->with([
            'razorpay_key' => config('services.razorpay.key'),
            'subscription_id' => $subscription['id'],
            'plan_name' => $plan->name,
        ]);
    }

    public function callback(Request $request)
    {
        $payload = $request->only([
            'razorpay_payment_id',
            'razorpay_subscription_id',
            'razorpay_signature'
        ]);

        if (!isset($payload['razorpay_payment_id'], $payload['razorpay_subscription_id'], $payload['razorpay_signature'])) {
            return response()->json(['error' => 'Invalid request data'], 400);
        }

        try {
            $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

            $api->utility->verifyPaymentSignature($payload);

            $rzpSubscription = $api->subscription->fetch($payload['razorpay_subscription_id']);

            $subscription = Subscription::where('razorpay_subscription_id', $rzpSubscription->id)->first();

            if (!$subscription) {
                return response()->json(['error' => 'Subscription not found'], 404);
            }

            $plan = $subscription->plan;
            $startAt = now();
            $endAt = match ($plan->interval) {
                'monthly' => $startAt->copy()->addMonth(),
                '3_months' => $startAt->copy()->addMonths(3),
                '6_months' => $startAt->copy()->addMonths(6),
                'yearly' => $startAt->copy()->addYear(),
                default => $startAt->copy()->addMonths(12),
            };

            $subscription->update([
                'status' => $rzpSubscription->status,
                'start_at' => $startAt,
                'end_at' => $endAt,
            ]);

            return response()->json(['success' => true]);
        } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
            \Log::error('Signature verification failed: ' . $e->getMessage());
            return response()->json(['error' => 'Payment verification failed.'], 403);
        } catch (\Exception $e) {
            \Log::error('Razorpay callback error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
