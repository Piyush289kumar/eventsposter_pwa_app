@extends('layouts.web.app')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4 text-dark">Terms & Conditions</h4>
                        <p class="text-muted"><small>Last updated: June 2025</small></p>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">1. Acceptance of Terms</h5>
                            <p>By accessing or using the Khyati Digi Ad poster downloader app ("Service"), you agree to be bound by these Terms & Conditions. If you disagree with any part, you may not access the Service.</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">2. Service Description</h5>
                            <p>Our Service allows users to create and download customized posters using their photos and names. The Service offers:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Free tier with basic features and limited downloads
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Paid subscription plans with premium features and unlimited downloads
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">3. Subscription Plans</h5>
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
                            <div class="alert alert-info mt-3">
                                <p class="mb-0"><i class="bi bi-info-circle-fill me-2"></i> All prices are inclusive of applicable taxes. Subscription automatically renews unless canceled at least 24 hours before the end of the current period.</p>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">4. User Content</h5>
                            <p>By uploading photos to our Service, you:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Confirm you have rights to use the images
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Grant us limited rights to process the images solely for providing the Service
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Acknowledge we don't claim ownership of your content
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">5. Payments & Refunds</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-currency-rupee me-2"></i>
                                    Payments are processed through secure third-party providers
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-x-circle me-2"></i>
                                    All sales are final - we don't offer refunds for subscription purchases
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-arrow-repeat me-2"></i>
                                    You may cancel auto-renewal at any time through your account settings
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">6. Prohibited Uses</h5>
                            <p>You agree not to use the Service to:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle me-2"></i>
                                    Create illegal, harmful, or offensive content
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle me-2"></i>
                                    Violate copyright or intellectual property rights
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle me-2"></i>
                                    Impersonate others without authorization
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">7. Service Modifications</h5>
                            <p>We reserve the right to modify or discontinue the Service (or any part) without notice. We shall not be liable for any modification, suspension, or discontinuance.</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">8. Termination</h5>
                            <p>We may terminate or suspend access to our Service immediately, without prior notice, for conduct that violates these Terms or may harm other users.</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">9. Limitation of Liability</h5>
                            <p>Khyati Digi Ad shall not be liable for any indirect, incidental, special or consequential damages resulting from use of the Service.</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">10. Changes to Terms</h5>
                            <p>We may revise these Terms at any time. By continuing to use the Service after revisions, you agree to be bound by the updated Terms.</p>
                        </div>
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2 mb-3">Contact Us</h5>
                            <p>For questions about these Terms, contact us at:</p>
                            <div class="d-flex align-items-center mt-2">
                                <span class="badge bg-primary me-2"><i class="bi bi-envelope-fill"></i></span>
                                <a href="mailto:contact@khyatidigital.com" class="text-decoration-none">contact@khyatidigital.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection