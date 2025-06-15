<form method="POST" action="{{ route('otp.verify') }}">
    @csrf
    <label>Phone Number</label>
    <input type="text" name="phone" value="{{ session('phone') }}" readonly>

    <label>Enter OTP</label>
    <input type="text" name="otp" required>

    <button type="submit">Verify & Login</button>
</form>
