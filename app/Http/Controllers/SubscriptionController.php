<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Razorpay\Api\Api;
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

        // $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));



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
        return view('layouts.core.pages.checkout', [
            'subscription_id' => $subscription['id'],
            'user' => $user,
            'plan' => $plan,
            'razorpay_key' => env('RAZORPAY_KEY'),
        ]);
    }


    public function callback(Request $request)
    {
        $payload = $request->only([
            'razorpay_payment_id',
            'razorpay_subscription_id',
            'razorpay_signature'
        ]);

        // Check if required data is present
        if (!isset($payload['razorpay_payment_id'], $payload['razorpay_subscription_id'], $payload['razorpay_signature'])) {
            return response()->json(['error' => 'Invalid request data'], 400);
        }

        try {
            $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));

            // ✅ Verify Signature
            $api->utility->verifyPaymentSignature([
                'razorpay_payment_id' => $payload['razorpay_payment_id'],
                'razorpay_subscription_id' => $payload['razorpay_subscription_id'],
                'razorpay_signature' => $payload['razorpay_signature'],
            ]);

            // ✅ Fetch subscription from Razorpay
            $rzpSubscription = $api->subscription->fetch($payload['razorpay_subscription_id']);

            // ✅ Find your database record
            $subscription = Subscription::where('razorpay_subscription_id', $rzpSubscription->id)->first();

            if (!$subscription) {
                return response()->json(['error' => 'Subscription not found'], 404);
            }

            // ✅ Update your subscription record
            $subscription->update([
                'status' => $rzpSubscription->status, // "active", "authenticated", etc.
                'start_at' => now(),
                'end_at' => now()->addMonths(12), // you can also customize this based on plan
            ]);

            return response()->json(['success' => true]);
        } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
            Log::error('Signature verification failed: ' . $e->getMessage());
            return response()->json(['error' => 'Payment verification failed.'], 403);
        } catch (\Exception $e) {
            Log::error('Razorpay callback error: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
