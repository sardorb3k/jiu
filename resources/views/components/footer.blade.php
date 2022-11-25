  <!-- Start Footer Area -->
  <footer class="footer-area black-bg-color">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-lg-3 col-sm-6">
                  <div class="single-footer-widget bg-f9f5f1">
                      <a href="{{ url('/') }}" class="logo">
                          <img src="{{ asset('uploads/' . $system->site_logo_footer) }}" alt="{{ $system->site_name }}"
                              width="130">
                      </a>
                      <p>{{ $system->site_description }}</p>
                      <ul class="social-icon">
                          <li>
                              <span>{{ __('site.follow') }}</span>
                          </li>
                          @if ($system->site_facebook)
                              <li>
                                  <a href="{{ $system->site_facebook }}" target="_blank">
                                      <i class="ri-facebook-line"></i>
                                  </a>
                              </li>
                          @endif
                          @if ($system->site_instagram)
                              <li>
                                  <a href="{{ $system->site_instagram }}" target="_blank">
                                      <i class="ri-instagram-line"></i>
                                  </a>
                              </li>
                          @endif
                          @if ($system->site_telegram)
                              <li>
                                  <a href="{{ $system->site_telegram }}" target="_blank">
                                      <i class="ri-telegram-line"></i>
                                  </a>
                              </li>
                          @endif
                      </ul>
                  </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                  <div class="single-footer-widget">
                      {{-- <h3>Useful link</h3> --}}

                      <ul class="import-link">
                          <li>
                              <a href="{{ url('/application') }}">{{ __('menu.admission_apply') }}</a>
                          </li>
                          <li>
                              <a href="{{ route('contact') }}">{{ __('menu.contact') }}</a>
                          </li>
                          <li>
                              <a href="{{ url('/uploads/license.pdf') }}">{{ __('menu.about_license') }}</a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                  <div class="single-footer-widget">
                      {{-- <h3>Study</h3> --}}

                      <ul class="import-link">
                          <li>
                              <a href="{{ url('/admissions') }}">{{ __('menu.examination') }}</a>
                          </li>
                          <li>
                              <a href="{{ url('/scholarships') }}">{{ __('menu.admission_scholarship') }}</a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                  <div class="single-footer-widget">
                      <h3>{{ __('site.inquiries') }}</h3>

                      <ul class="address">
                          <li class="location">
                              <i class="ri-map-pin-line"></i>
                              <span>{{ __('site.address') }}</span>
                              {{ $system->site_address }}
                          </li>
                          <li>
                              <i class="ri-mail-line"></i>
                              <span>{{ __('site.email') }}</span>
                              <a href="mailto:{{ $system->site_email }}"><span
                                      class="__cf_email__">{{ $system->site_email }}</span></a>
                          </li>
                          <li>
                              <i class="ri-phone-line"></i>
                              <span>{{ __('site.phone') }}</span>
                              <a
                                  href="tel:{{ $system->site_phone }}">+{{ sprintf('(%s) %s %s %s %s', substr($system->site_phone, 0, 3), substr($system->site_phone, 3, 2), substr($system->site_phone, 5, 3), substr($system->site_phone, 8, 2), substr($system->site_phone, 10, 2)) }}</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer Area -->
  <!-- Start Copy Right Area -->
  <div class="copy-right-area">
      <div class="container">
          <p>
              Copyright <i class="ri-copyright-line"></i> 2022 {{ $system->site_name }}.
              {{ __('site.all_rights_reserved') }}
          </p>
      </div>
  </div>
  <!-- End Copy Right Area -->
