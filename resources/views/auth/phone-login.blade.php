<form method="POST" action="{{ route('otp.send') }}">
    @csrf
    <label>Phone Number</label>
    <input type="text" name="phone" required>
    <button type="submit">Send OTP</button>
</form>
