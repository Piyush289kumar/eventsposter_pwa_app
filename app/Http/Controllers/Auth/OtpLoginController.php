<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OtpVerification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Log;

class OtpLoginController extends Controller
{
    public function showPhoneForm()
    {
        return view('auth.phone-login');
    }


    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:10',
        ]);

        $otp = rand(100000, 999999);

        OtpVerification::updateOrCreate(
            ['phone' => $request->phone],
            [
                'otp' => $otp,
                'expires_at' => now()->addMinutes(10),
            ]
        );

        $authKey = "ba6aebc61a6642bffb7bcc96f42a890";
        $senderId = 'KHYTAD';
        $routeId = 1;
        $mobile = $request->phone;
        $smsContentType = 'english';

        $url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=$authKey&message=Dear Coustomer, Your OTP for login is $otp and it Will be Valid For 10 Mins - Khyati Digital-Khyati Digi ad&senderId=$senderId&routeId=$routeId&mobileNos=$mobile&smsContentType=$smsContentType";

        // http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=ba6aebc61a6642bffb7bcc96f42a890&message=Dear Coustomer, Your OTP for login is 886579 and it Will be Valid For 10 Mins - Khyati Digital-Khyati Digi ad&senderId=KHYTAD&routeId=1&mobileNos=8817762774&smsContentType=english

        // Send GET request with full URL
        $response = Http::get($url);

        // Log the response
        Log::info('OTP Response: ' . $response->body());

        return redirect()->route('otp.verify.form')->with('phone', $request->phone);
    }
    public function showVerifyForm()
    {
        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:10',
            'otp' => 'required|digits:6',
        ]);

        $otpData = OtpVerification::where('phone', $request->phone)
            ->where('otp', $request->otp)
            ->first();

        if (!$otpData || Carbon::parse($otpData->expires_at)->lt(now())) {
            return back()->withInput()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            // Redirect to registration form if user doesn't exist
            return redirect()->route('otp.register.form')->with([
                'phone' => $request->phone,
                'otp_verified' => true,
            ]);
        }

        // Existing user — Login
        Auth::login($user);
        $otpData->delete();

        return redirect()->intended(config('fortify.home'));
    }

    public function showRegisterForm(Request $request)
    {
        if (!$request->session()->get('otp_verified')) {
            return redirect()->route('otp.login.form');
        }

        return view('auth.register-otp', [
            'phone' => session('phone'),
        ]);
    }

    public function registerAfterOtp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
            'phone' => 'required|digits:10|unique:users,phone',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        OtpVerification::where('phone', $request->phone)->delete();

        return redirect()->intended(config('fortify.home'));
    }
}





// public function verifyOtp(Request $request)
// {
//     $request->validate([
//         'phone' => 'required|digits:10',
//         'otp' => 'required|digits:6',
//     ]);
//     $otpData = OtpVerification::where('phone', $request->phone)
//         ->where('otp', $request->otp)
//         ->first();
//     // Parse the expires_at to Carbon instance if needed
//     if (!$otpData || Carbon::parse($otpData->expires_at)->lt(now())) {
//         return back()
//             ->withInput()
//             ->withErrors(['otp' => 'Invalid or expired OTP.']);
//     }
//     $user = User::firstOrCreate(['phone' => $request->phone], [
//         'name' => 'User ' . $request->phone,
//     ]);
//     Auth::login($user);
//     $otpData->delete();
//     return redirect()->intended(config('fortify.home'));
// }