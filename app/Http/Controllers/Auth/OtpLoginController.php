<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OtpVerification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;
class OtpLoginController extends Controller
{
    public function showPhoneForm()
    {
        return view('auth.phone-login');
    }
    public function sendOtp(Request $request)
    {
        $request->validate(['phone' => 'required|digits:10']);
        $otp = rand(100000, 999999);
        OtpVerification::updateOrCreate(
            ['phone' => $request->phone],
            ['otp' => $otp, 'expires_at' => now()->addMinutes(5)]
        );
        // $authKey = env('MSG_CLUB_AUTH_KEY');
        $authKey = "ba6aebc61a6642bffb7bcc96f42a890";
        // Send OTP via your API
        $response = Http::get('http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms', [
            'AUTH_KEY' => $authKey,
            'message' => "Your OTP is: $otp",
            'senderId' => 'SMSCLUB',
            'routeId' => 1,
            'mobileNos' => $request->phone,
            'smsContentType' => 'english',
        ]);
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
        // Parse the expires_at to Carbon instance if needed
        if (!$otpData || Carbon::parse($otpData->expires_at)->lt(now())) {
            return back()
                ->withInput()
                ->withErrors(['otp' => 'Invalid or expired OTP.']);
        }
        $user = User::firstOrCreate(['phone' => $request->phone], [
            'name' => 'User ' . $request->phone,
        ]);
        Auth::login($user);
        $otpData->delete();
        return redirect()->intended(config('fortify.home'));
    }
}
