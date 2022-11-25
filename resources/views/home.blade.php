@extends('layouts.app')
@section('title', __('home.title'))
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span>{{ __('home.welcome') }}</span>
                                <h1>{{ __('home.description') }}</h1>

                                <div class="banner-btn">
                                    <a href="{{ url('/application') }}" class="default-btn">
                                        {{ __('home.application') }}
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>

                                <div class="courses-link">
                                    <a href="{{ url('/#about') }}">
                                        {{ __('home.about') }}
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                    <a href="{{ url('/contact') }}" class="study-online">
                                        {{ __('home.contact') }}
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-img">
                                <img src="assets/images/banner/banner-img-1.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="social-link">
            @if ($system->site_facebook)
                <li>
                    <a href="{{ $system->site_facebook }}" target="_blank">
                        Facebook
                    </a>
                </li>
            @endif
            @if ($system->site_instagram)
                <li>
                    <a href="{{ $system->site_instagram }}" target="_blank">
                        Instagram
                    </a>
                </li>
            @endif
            @if ($system->site_telegram)
                <li>
                    <a href="{{ $system->site_telegram }}" target="_blank">
                        Telegram
                    </a>
                </li>
            @endif
            @if ($system->site_youtube)
                <li>
                    <a href="{{ $system->site_youtube }}" target="_blank">
                        Youtube
                    </a>
                </li>
            @endif
            @if ($system->site_linkedin)
                <li>
                    <a href="{{ $system->site_linkedin }}" target="_blank">
                        Linkedin
                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- End Banner Area -->

    <!-- Stat About Area -->
    <section class="about-area ptb-100" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img mr-15">
                        <img src="assets/images/about-img.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <h3>{{ __('home.section_about_title') }}</h3>
                        <span>{{ __('home.section_about_desc') }}</span>

                        <p>{{ __('home.section_about_content') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    <section class="our-campus-information-area pb-100" id="founder">
        <div class="container">
            <div class="our-campus-bg our-campus-bg-style">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="campus-content mr-15">
                            <h3>{{ __('home.section_founder_title') }}</h3>
                            <span>{{ __('home.section_founder_desc') }}</span>
                            <p>{{ __('home.section_founder_content') }}</p>

                            {{-- <a href="campus-information.html" class="read-more">
                                Find out more
                                <span class="ri-arrow-right-line"></span>
                            </a> --}}
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="campus-img-2 ml-15">
                            <img src="{{ asset('assets/images/hiroseyuya.webp') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="study-area pt-100 pb-70" id="opportunities">
        <div class="container">
            <div class="section-title white-title">
                <h2>{{ __('home.section_vision_title') }}</h2>
                <p>{{ __('home.section_vision_desc') }}</p>
            </div>

            <div class="row justify-content-center">
                <div class="study-slider owl-carousel owl-theme">
                    <div class="single-study">
                        <i class="flaticon-finance"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_1_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_1_title') }}</p>
                        <br>
                        <a href="{{ url('/contact') }}" class="read-more">
                            {{ __('home.section_vision_contact') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="#">{{ substr(__('home.section_vision_2_title'),0,7) }} ...</a>
                        </h3>
                        <p>{{ __('home.section_vision_2_title') }}</p>
                        <br>
                        <a href="{{ url('/contact') }}" class="read-more">
                            {{ __('home.section_vision_contact') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-compliant"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_3_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_3_title') }}</p>
                        <br>
                        <a href="{{ url('/contact') }}" class="read-more">
                            {{ __('home.section_vision_contact') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-health"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_4_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_4_title') }}</p>

                        <a href="{{ url('/contact') }}" class="read-more">
                            {{ __('home.section_vision_contact') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_5_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_5_title') }}</p>

                        <a href="{{ url('/contact') }}" class="read-more">
                            {{ __('home.section_vision_contact') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_6_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_6_title') }}</p>
                        <a href="{{ url('/contact') }}" class="read-more">
                            {{ __('home.section_vision_contact') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-campus-information-area pb-100" id="ourmission">
        <div class="container">
            <div class="our-campus-bg our-campus-bg-style">
                <div class="row align-items-center">
                    <div class="mt-5 mb-5">
                        <div class="campus-content ml-15" style="text-align: center;">
                            <h2>{{ __('home.section_mission_title') }}</h2>
                            <span>{{ __('home.section_mission_desc') }}</span>
                            <p>{{ __('home.section_mission_content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-steps-area pt-100 pb-70" id="programmesweofferfor">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('home.section_programmes_offer_title') }}</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6 text-center">
                    <div class="single-simple-steps icon-bg-style">
                        <i class="flaticon-search"></i>
                        <h3><a href="{{ url('/page/foundation-programme') }}" style="color: #252525">{{ __('home.section_programmes_offer_1_title') }}</a></h3>
                        <p>{{ __('home.section_programmes_offer_1_desc') }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 text-center">
                    <div class="single-simple-steps icon-bg-style">
                        <i class="flaticon-presentation"></i>
                        <h3><a href="{{ url('/page/foundationin-business') }}" style="color: #252525">{{ substr(__('home.section_programmes_offer_2_title'),0,23) }}</a></h3>
                        <p>{{ __('home.section_programmes_offer_2_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-steps-area pb-70" id="bachelorsprogrammes">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('home.section_programmes_title') }}</h2>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna</p> --}}
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-search"></i>
                        <h3>{{ __('home.section_programmes_1_title') }}</h3>
                        <p>{{ __('home.section_programmes_1_desc') }}</p>
                        <br>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-choosing"></i>
                        <h3>{{ __('home.section_programmes_2_title') }}</h3>
                        <p>{{ __('home.section_programmes_2_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-contract"></i>
                        <h3>{{ __('home.section_programmes_3_title') }}</h3>
                        <p>{{ __('home.section_programmes_3_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-presentation"></i>
                        <h3>{{ __('home.section_programmes_4_title') }}</h3>
                        <p>{{ __('home.section_programmes_4_desc') }}</p>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="single-simple-steps">
                        <i class="flaticon-presentation"></i>
                        <h3>{{ __('home.section_programmes_4_title') }}</h3>
                        <p>{{ __('home.section_programmes_4_desc') }}</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="application-submit-area" id="applicationform">
        <div class="container">
            <div class="application-submit-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h2>{{ __('home.section_application_title') }}</h2>
                            <a href="{{ route('login') }}" class="default-btn">
                                {{ __('home.section_application_button') }}
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="application-submit-img">
                            <img src="{{ asset('assets/images/application-submit-img.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="find-courses-area pt-100 pb-100" id="information">
        <div class="find-courses-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ml-15">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-counter">
                                        <i class="flaticon-graduated"></i>

                                        <div class="count-title">
                                            <h2>$<span class="odometer odometer-auto-theme" data-count="3000">
                                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">1</span></span></span></span></span><span
                                                            class="odometer-formatting-mark">,</span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">0</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">0</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">0</span></span></span></span></span>
                                                    </div>
                                                </span>
                                            </h2>
                                            <h4>{{ __('home.section_info_1_title') }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-counter bg-172f41">
                                        <i class="flaticon-teacher"></i>

                                        <div class="count-title">
                                            <h2>
                                                <span class="odometer odometer-auto-theme" data-count="100">
                                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">6</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">4</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">0</span></span></span></span></span>
                                                    </div>
                                                </span>
                                            </h2>
                                            <h4>{{ __('home.section_info_2_title') }}</h4>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-counter bg-172f41">
                                        <i class="flaticon-book-1"></i>

                                        <div class="count-title">
                                            <h2>$<span class="odometer odometer-auto-theme" data-count="1000000">
                                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">5</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">4</span></span></span></span></span>
                                                    </div>
                                                </span>
                                            </h2>
                                            <h4>{{ __('home.section_info_3_title') }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-counter">
                                        <i class="flaticon-graduation-cap"></i>

                                        <div class="count-title">
                                            <h2>
                                                <span class="odometer odometer-auto-theme" data-count="400">
                                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">2</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">6</span></span></span></span></span><span
                                                            class="odometer-digit"><span
                                                                class="odometer-digit-spacer">8</span><span
                                                                class="odometer-digit-inner"><span
                                                                    class="odometer-ribbon"><span
                                                                        class="odometer-ribbon-inner"><span
                                                                            class="odometer-value">9</span></span></span></span></span>
                                                    </div>
                                                </span>
                                            </h2>
                                            <h4>{{ __('home.section_info_4_title') }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
