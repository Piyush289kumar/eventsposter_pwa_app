  <section class="setting-section">
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
              <h2 class="offcanvas-title" id="offcanvasExampleLabel">Settings</h2>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              {{-- <a href="security.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main">
                                <img src="assets/images/svg/security.svg" alt="security">
                            </div>
                            <h2 class="new-notification">Security</h2>
                        </div>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a>
                    <a href="marketingPreferences.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main">
                                <img src="assets/images/svg/marketing-icon.svg" alt="marketing-icon">
                            </div>
                            <h2 class="new-notification">Marketing Preferences</h2>
                        </div>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a>
                    <a href="notificationSettings.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main">
                                <img src="assets/images/svg/notificationOption.svg" alt="notificationOption">
                            </div>
                            <h2 class="new-notification">Notification Settings</h2>
                        </div>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a>
                    <a href="language.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main">
                                <img src="assets/images/svg/language-icon.svg" alt="language-icon">
                            </div>
                            <h2 class="new-notification">Language</h2>
                        </div>
                        <p class="version">English (US)</p>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a>
                    <a href="faq.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main">
                                <img src="assets/images/svg/faqs-icon.svg" alt="faqs-icon">
                            </div>
                            <h2 class="new-notification">FAQs</h2>
                        </div>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a>
                    <a href="dataPrivacy.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main">
                                <img src="assets/images/svg/dataPrivacy-icon.svg" alt="dataPrivacy-icon">
                            </div>
                            <h2 class="new-notification">Data & Privacy Policy</h2>
                        </div>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a> --}}
              <a href="{{ route('about') }}" class="home-setting-icons-main">
                  <div class="setting-opestion-main">
                      <div class="setting-icons-main">
                          <img src="assets/images/svg/aboutVoice.svg" alt="aboutVoice">
                      </div>
                      <h2 class="new-notification">About WEvoice</h2>
                  </div>
                  <p class="version">v1.0.1</p>
                  <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                      alt="right-half-arrow-black">
              </a>
              <a href="{{ route('feedback') }}" class="home-setting-icons-main">
                  <div class="setting-opestion-main">
                      <div class="setting-icons-main">
                          <img src="assets/images/svg/feedback-icon.svg" alt="feedback-icon">
                      </div>
                      <h2 class="new-notification">Send Feedback</h2>
                  </div>
                  <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                      alt="right-half-arrow-black">
              </a>
              <a href="{{ route('contact') }}" class="home-setting-icons-main">
                  <div class="setting-opestion-main">
                      <div class="setting-icons-main">
                          <img src="assets/images/svg/contactUs-icon.svg" alt="contactUs-icon">
                      </div>
                      <h2 class="new-notification">Contact Us</h2>
                  </div>
                  <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                      alt="right-half-arrow-black">
              </a>
              <a href="{{ route('invite') }}" class="home-setting-icons-main">
                  <div class="setting-opestion-main">
                      <div class="setting-icons-main">
                          <img src="assets/images/svg/inviteFriend-icon.svg" alt="inviteFriend-icon">
                      </div>
                      <h2 class="new-notification">Invite Friends</h2>
                  </div>
                  <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                      alt="right-half-arrow-black">
              </a>
              {{-- <a href="deleteDeactivate.html" class="home-setting-icons-main">
                        <div class="setting-opestion-main">
                            <div class="setting-icons-main setting-icons-main2">
                                <img src="assets/images/svg/close-setting-icon.svg" alt="close-setting-icon">
                            </div>
                            <h2 class="new-notification">Delete or Deactivate Account</h2>
                        </div>
                        <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                            alt="right-half-arrow-black">
                    </a> --}}
              <a href="{{ route('logoutcore') }}" class="home-setting-icons-main mb-0">
                  <div class="setting-opestion-main">
                      <div class="setting-icons-main setting-icons-main2">
                          <img src="assets/images/svg/logOut-icon.svg" alt="logOut-icon">
                      </div>
                      <h2 class="new-notification">Logout</h2>
                  </div>
                  <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg"
                      alt="right-half-arrow-black">
              </a>
          </div>
      </div>
  </section>
