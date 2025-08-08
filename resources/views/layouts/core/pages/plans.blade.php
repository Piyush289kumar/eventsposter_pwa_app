
@extends('layouts.core.app')

@section('styles')
<style>
    .grayscale-img {
        filter: grayscale(100%);
    }
    .disabled-link {
        pointer-events: none;
        opacity: 0.6;
        cursor: not-allowed;
    }
</style>
@endsection

@section('content')
<section class="section-main section-main-ver-home">
    <div class="trasnsBox-mains mt-3">
        @foreach($plans as $plan)
            @php
                $features = explode("\n", $plan->description);
                $intervalText = match($plan->interval) {
                    'monthly' => 'Month',
                    '3_months' => '3 Months',
                    '6_months' => '6 Months',
                    'yearly' => 'Year',
                    default => ucfirst($plan->interval),
                };
            @endphp
            <div class="trasnsBox voice-trans" style="margin-bottom: 15px;">
                <h2 class="speechAi">{{ $plan->name }}</h2>
                <ul style="font-size: 14px; font-weight: 700;">
                    @foreach($features as $feature)
                        <li>- {{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="button-main start-btn">
                    <form method="POST" action="{{ route('subscribe.plan', $plan->id) }}">
                        @csrf
                        <button type="submit" class="main-bg-color-btn px-3 py-2">
                            ₹ {{ number_format($plan->price) }} / {{ $intervalText }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection

{{-- Razorpay Script --}}
@php
    $razorpay_key = session('razorpay_key');
    $subscription_id = session('subscription_id');
    $plan_name = session('plan_name');
@endphp

@if($razorpay_key && $subscription_id && $plan_name)
    @section('scripts')
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var options = {
                    key: '{{ $razorpay_key }}',
                    subscription_id: '{{ $subscription_id }}',
                    name: '{{ auth()->user()->name }}',
                    description: '{{ $plan_name }}',
                    handler: function (response) {
                        fetch('{{ route('razorpay.callback') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(response)
                        }).then(res => window.location.href = "/dashboard");
                    },
                    prefill: {
                        name: '{{ auth()->user()->name }}',
                        email: '{{ auth()->user()->email }}'
                    },
                    theme: {
                        color: '#528FF0'
                    }
                };
                var rzp = new Razorpay(options);
                rzp.open();
            });
        </script>
    @endsection
@endif