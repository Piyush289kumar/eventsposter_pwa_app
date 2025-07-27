@extends('layouts.core.app')

@section('styles')
    <style>
        .trasnsBox-mains {
            padding: 20px;
            text-align: center;
        }
        .main-bg-color-btn {
            background-color: #528FF0;
            color: #fff;
            padding: 10px 25px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .main-bg-color-btn:hover {
            background-color: #3b70c9;
        }
        .section-main-ver-home {
            background-color: #f9f9f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h2, p {
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('content')
    <section class="section-main section-main-ver-home">
        <div class="trasnsBox-mains mt-3">
            <h2>Complete Your Subscription</h2>
            <p>You are subscribing to the <strong>{{ $plan->name }}</strong> plan (₹{{ $plan->price }})</p>
            <button id="pay-button" class="main-bg-color-btn mt-4">Pay Now</button>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        const options = {
            key: '{{ $razorpay_key }}',
            subscription_id: '{{ $subscription_id }}',
            name: '{{ $user->name }}',
            description: '{{ $plan->name }}',
            handler: function (response) {
                fetch('{{ route('razorpay.callback') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        razorpay_payment_id: response.razorpay_payment_id,
                        razorpay_subscription_id: response.razorpay_subscription_id,
                        razorpay_signature: response.razorpay_signature
                    })
                }).then(res => {
                    if (res.ok) {
                        window.location.href = "/dashboard";
                    } else {
                        alert('Payment verification failed.');
                    }
                });
            },
            prefill: {
                name: '{{ $user->name }}',
                email: '{{ $user->email }}'
            },
            theme: {
                color: '#528FF0'
            }
        };

        document.getElementById('pay-button').onclick = function () {
            const rzp = new Razorpay(options);
            rzp.open();
        };
    </script>
@endsection
