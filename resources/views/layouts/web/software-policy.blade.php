@extends('layouts.web.app')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4 text-dark">Software Policy</h4>
                        <p class="text-muted"><small>Last updated: June 2025</small></p>
                        <div class="d-flex align-items-center mb-4">
                            <a href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share" 
                               target="_blank" 
                               class="btn btn-success me-3">
                                <i class="bi bi-google-play me-2"></i> Get on Google Play
                            </a>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">1. Software License</h5>
                            <p>Khyati Digi Ad grants you a limited, non-exclusive, non-transferable license to use the Event Poster App ("Software") for personal, non-commercial purposes in accordance with these terms.</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">2. Permitted Use</h5>
                            <p>You may use the Software to:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    Download and install on Android devices via Google Play Store
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    Create personalized posters using your own photos and text
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    Share created posters through social media or messaging platforms
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">3. Restrictions</h5>
                            <p>You may not:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle text-danger me-2"></i>
                                    Reverse engineer, decompile, or disassemble the Software
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle text-danger me-2"></i>
                                    Modify, adapt, or create derivative works
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle text-danger me-2"></i>
                                    Remove any proprietary notices or labels
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <i class="bi bi-slash-circle text-danger me-2"></i>
                                    Use the Software for any illegal purpose
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">4. Google Play Requirements</h5>
                            <p>Our app complies with all Google Play Developer Policies, including:</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-shield-check text-primary me-2"></i>
                                    <strong>Content Policies:</strong> No prohibited or restricted content
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-shield-check text-primary me-2"></i>
                                    <strong>Privacy:</strong> Clear data collection disclosure (see our Privacy Policy)
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-shield-check text-primary me-2"></i>
                                    <strong>Monetization:</strong> Clear disclosure of in-app purchases
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-shield-check text-primary me-2"></i>
                                    <strong>IP Protection:</strong> Respect for copyright and trademark rights
                                </li>
                            </ul>
                            <div class="alert alert-info mt-3">
                                <p class="mb-0"><i class="bi bi-info-circle-fill me-2"></i> Our app is only available through official channels like Google Play Store. We don't support sideloading or modified APKs.</p>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">5. Updates & Maintenance</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <i class="bi bi-arrow-up-circle text-primary me-2"></i>
                                    We regularly release updates to improve functionality and security
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-bug-fill text-primary me-2"></i>
                                    Critical bugs are prioritized and fixed in timely manner
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-exclamation-triangle text-warning me-2"></i>
                                    Some updates may require Android OS version upgrades
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">6. System Requirements</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Component</th>
                                            <th>Minimum Requirement</th>
                                            <th>Recommended</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Android Version</td>
                                            <td>8.0 (Oreo)</td>
                                            <td>10.0+</td>
                                        </tr>
                                        <tr>
                                            <td>RAM</td>
                                            <td>2GB</td>
                                            <td>4GB+</td>
                                        </tr>
                                        <tr>
                                            <td>Storage</td>
                                            <td>50MB free space</td>
                                            <td>100MB+</td>
                                        </tr>
                                        <tr>
                                            <td>Internet</td>
                                            <td>Required for downloads</td>
                                            <td>4G/WiFi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">7. Termination</h5>
                            <p>The license is effective until terminated. Your rights will terminate automatically if you fail to comply with these terms. Upon termination, you must cease all use and delete the Software.</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="border-bottom pb-2 mb-3">8. Disclaimer</h5>
                            <div class="alert alert-warning">
                                <p class="mb-0"><i class="bi bi-exclamation-triangle-fill me-2"></i> THE SOFTWARE IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND. WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5 class="border-bottom pb-2 mb-3">Contact Support</h5>
                            <p>For technical support or policy questions:</p>
                            <div class="d-flex align-items-center mt-2 mb-2">
                                <span class="badge bg-primary me-2"><i class="bi bi-envelope-fill"></i></span>
                                <a href="mailto:support@khyatidigital.com" class="text-decoration-none">support@khyatidigital.com</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-success me-2"><i class="bi bi-google-play"></i></span>
                                <a href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share" 
                                   target="_blank" 
                                   class="text-decoration-none">
                                    Google Play Listing
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection