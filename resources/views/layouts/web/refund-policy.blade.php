@extends('layouts.web.app')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4 text-dark">Refund & Cancellation Policy</h4>
                        <p class="text-muted"><small>Last updated: June 2025</small></p>
                        <div class="alert alert-info mb-5">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            All payments for Khyati Digi Ad subscriptions are processed through Razorpay, our secure payment gateway partner.
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">Subscription Plans</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Plan</th>
                                            <th>Duration</th>
                                            <th>Price (INR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basic</td>
                                            <td>1 Month</td>
                                            <td>₹51</td>
                                        </tr>
                                        <tr>
                                            <td>Standard</td>
                                            <td>3 Months</td>
                                            <td>₹151</td>
                                        </tr>
                                        <tr>
                                            <td>Premium</td>
                                            <td>6 Months</td>
                                            <td>₹251</td>
                                        </tr>
                                        <tr>
                                            <td>Ultimate</td>
                                            <td>12 Months</td>
                                            <td>₹451</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">Cancellation Policy</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                    <strong>Auto-Renewal:</strong> You may cancel auto-renewal at any time through your account settings or via Google Play Store/Apple App Store
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-clock-fill text-warning me-2"></i>
                                    <strong>Timing:</strong> Cancellation must be made at least 24 hours before the next billing cycle to avoid charges
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-arrow-repeat text-primary me-2"></i>
                                    <strong>Effect:</strong> Cancellation takes effect at the end of your current billing period
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">Refund Policy</h5>
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Important:</strong> We process refunds within 4-7 business days after approval
                            </div>
                            <h4 class="mt-4">Eligible Cases</h4>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item list-group-item-success">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Duplicate or accidental charges
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Technical issues preventing service access
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Failed transactions where money was deducted
                                </li>
                            </ul>
                            <h4 class="mt-4">Non-Eligible Cases</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                    Change of mind after purchase
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                    Partial usage during subscription period
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-x-circle-fill text-danger me-2"></i>
                                    Refund requests after 7 days of purchase
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">Refund Process</h5>
                            <div class="steps">
                                <div class="step mb-4">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">1</div>
                                    <div class="step-content ms-4">
                                        <h5 class="mb-1">Submit Request</h5>
                                        <p class="mb-0">Email us at <a href="mailto:refunds@khyatidigital.com">refunds@khyatidigital.com</a> with your transaction details</p>
                                    </div>
                                </div>
                                <div class="step mb-4">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">2</div>
                                    <div class="step-content ms-4">
                                        <h5 class="mb-1">Verification</h5>
                                        <p class="mb-0">Our team verifies the request within 24-48 hours</p>
                                    </div>
                                </div>
                                <div class="step mb-4">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">3</div>
                                    <div class="step-content ms-4">
                                        <h5 class="mb-1">Processing</h5>
                                        <p class="mb-0">Approved refunds are processed via Razorpay</p>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">4</div>
                                    <div class="step-content ms-4">
                                        <h5 class="mb-1">Completion</h5>
                                        <p class="mb-0">Amount reflects in your account within 4-7 business days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2 mb-3">Contact for Refunds</h5>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-envelope-fill text-primary me-2"></i>
                                <a href="mailto:refunds@khyatidigital.com" class="text-decoration-none">refunds@khyatidigital.com</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone-fill text-primary me-2"></i>
                                <a href="tel:+919479590611" class="text-decoration-none">+91 94795 90611</a> (10AM-6PM, Mon-Fri)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection