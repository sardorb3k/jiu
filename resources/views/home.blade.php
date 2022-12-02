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
                                <h1 id="banner_title">{{ __('home.description') }}</h1>

                                <div class="banner-btn">
                                    <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
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
                                <img src="assets/images/banner/banner_1.png" id="banner_image"
                                    class="animation-name: cf3FadeInOut;" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @keyframes cf4FadeInOut {
                0% {
                    opacity: 1;
                }

                17% {
                    opacity: 1;
                }

                25% {
                    opacity: 0;
                }

                92% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        </style>
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
                        {{-- <span>{{ __('home.section_about_desc') }}</span> --}}

                        <p>{{ __('home.section_about_content') }}</p>
                        <a href="https://forms.amocrm.ru/rltmmwd" class="read-more">
                            {{ __('home.section_about_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    {{-- <section class="our-campus-information-area pb-100" id="founder">
        <div class="container">
            <div class="our-campus-bg our-campus-bg-style">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="campus-content mr-15">
                            <h3>{{ __('home.section_founder_title') }}</h3>
                            <span>{{ __('home.section_founder_desc') }}</span>
                            <p>{{ __('home.section_founder_content') }}</p>
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
    </section> --}}

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
                        <p>{{ __('home.section_vision_1_content') }}</p>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_2_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_2_content') }}</p>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-compliant"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_3_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_3_content') }}</p>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-health"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_4_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_4_content') }}</p>
                    </div>

                    <div class="single-study">
                        <i class="flaticon-data-scientist"></i>
                        <h3>
                            <a href="#">{{ __('home.section_vision_5_title') }}</a>
                        </h3>
                        <p>{{ __('home.section_vision_5_content') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="application-submit-area" id="applicationform">
        <div class="container">
            <div class="application-submit-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h2>{{ __('home.section_application_4_title') }}</h2>
                            <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
                                {{ __('home.section_application_4_button') }}
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


    <section class="simple-steps-area pb-70 pt-70" id="bachelorsprogrammes">
        <div class="container">
            <div class="section-title">
                <h3>{{ __('home.section_programmes_title') }}</h3>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna</p> --}}
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-simple-steps text-center">
                        <i class="ri-mac-fill"></i>
                        <h5>{{ __('home.section_programmes_1_title') }}</h5>
                        {{-- <p>{{ __('home.section_programmes_1_desc') }}</p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-simple-steps text-center">
                        <i class="flaticon-choosing"></i>
                        <h5>{{ __('home.section_programmes_2_title') }}</h5>
                        {{-- <p>{{ __('home.section_programmes_2_desc') }}</p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-simple-steps text-center">
                        <i class="flaticon-contract"></i>
                        <h5>{{ __('home.section_programmes_3_title') }}</h5>
                        {{-- <p>{{ __('home.section_programmes_3_desc') }}</p> --}}
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="single-simple-steps text-center">
                        <i class="flaticon-presentation"></i>
                        <h5>{{ __('home.section_programmes_4_title') }}</h5>
                        {{-- <p>{{ __('home.section_programmes_4_desc') }}</p> --}}
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="single-simple-steps text-center">
                        <i class="ri-flight-takeoff-fill"></i>
                        <h5>{{ __('home.section_programmes_5_title') }}</h5>
                        {{-- <p>{{ __('home.section_programmes_5_desc') }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-campus-information-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="campus-img">
                        <img src="assets/images/grant-unviversity.webp" alt="Image">
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="campus-content">
                        <span>Japanese International University</span>
                        <h2>{{ __('home.section_grant_title') }}</h2>
                        <p>{{ __('home.section_grant_content') }}</p>
                        <br>
                        <a href="#" class="read-more">
                            {{ __('home.section_grant_button') }}
                            <span class="ri-arrow-right-line"></span>
                        </a>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="campus-experience-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="logistics-solutions-img bg-2">
                        <div class="video-button">
                            <a href="https://www.youtube.com/watch?v=ALjXexIheUg&ab_channel=JUSTGRANT"
                                class="popup-youtube video-btn">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="campus-experience-slider owl-carousel owl-theme owl-loaded owl-drag">



                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1908px, 0px, 0px); transition: all 1s ease 0s; width: 3817px;">
                                <div class="owl-item cloned" style="width: 636.016px;">
                                    <div class="single-campus-experience">
                                        <h3>{{ __('home.section_7_title') }}</h3>
                                        <p>{{ __('home.section_7_content') }}</p>
                                        <br>
                                        <br>
                                        <a href="#" class="read-more">
                                            {{ __('home.section_7_button') }}
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="application-submit-area pt-70" id="applicationform">
        <div class="container">
            <div class="application-submit-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h3>{{ __('home.section_application_8_title') }}</h3>
                            <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
                                {{ __('home.section_application_8_button') }}
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

    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('home.section_8_title') }}</h2>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-5 col-md-6">
                    <div class="single-blog">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/images/japantravel.webp" alt="Image">
                        </a>

                        <div class="blog-content">

                            <h3>
                                <a href="#">
                                    {{ __('home.section_8_card_1_title') }}
                                </a>
                            </h3>

                            <p>{{ __('home.section_8_card_1_content') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="single-blog">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/images/usatravel.jpg" alt="Image">
                        </a>

                        <div class="blog-content">

                            <h3>
                                <a href="#">
                                    {{ __('home.section_8_card_2_title') }}
                                </a>
                            </h3>

                            <p>{{ __('home.section_8_card_2_content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="events-content mr-15">
                        {{-- <span>O’qi. Ishtirok et. Zavqlan.</span> --}}
                        <h1>{{ __('home.section_10_title') }}</h1>
                        <h4>{{ __('home.section_10_title_2') }}</h4>

                        <div class="row">
                            <div class="col-lg-4 mt-5">
                                <div class="events-timer ml-15" style="padding: 15px 0px">
                                    <i class="flaticon-choosing" style="font-size: 50px;color: white;"></i>
                                    <span>{{ __('home.section_10_card_1_title') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="events-timer ml-15" style="padding: 15px 0px">
                                    <i class="ri-building-4-fill" style="font-size: 50px;color: white;"></i>
                                    <span>{{ __('home.section_10_card_2_title') }}</span>
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="events-timer ml-15" style="padding: 15px 0px">
                                    <i class="ri-riding-line" style="font-size: 50px;color: white;"></i>
                                    <span>{{ __('home.section_10_card_3_title') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="events-timer ml-15" style="padding: 15px 0px">
                                    <i class="ri-group-fill" style="font-size: 50px;color: white;"></i>
                                    <span>{{ __('home.section_10_card_4_title') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="events-timer ml-15" style="padding: 15px 0px">
                                    <i class="ri-flight-takeoff-fill" style="font-size: 50px;color: white;"></i>
                                    <span>{{ __('home.section_10_card_5_title') }}</span>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="events-timer ml-15" style="padding: 15px 0px">
                                    <i class="ri-body-scan-fill" style="font-size: 50px;color: white;"></i>
                                    <span>{{ __('home.section_10_card_6_title') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" style="margin-top: 12%">
                    <div class="events-timer ml-15">
                        <div class="event-img">
                            <img src="assets/images/event-img.jpg" alt="Image">
                        </div>

                        <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
                            TALABA BO'LING
                        </a>

                        {{-- <a href="application.html" class="default-btn">
                            Book now
                            <i class="ri-arrow-right-line"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="application-submit-area" id="applicationform">
        <div class="container">
            <div class="application-submit-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h3>{{ __('home.section_application_title') }}</h3>
                            <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
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

    <section class="simple-steps-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('home.section_12_card_1_title') }}</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-simple-steps icon-bg-style">
                        <i class="flaticon-search"></i>
                        <h3>{{ __('home.section_12_card_1_title') }}</h3>
                        <p>{{ __('home.section_12_card_1_content') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-simple-steps icon-bg-style">
                        <i class="flaticon-choosing"></i>
                        <h3>{{ __('home.section_12_card_2_title') }}</h3>
                        <p>{{ __('home.section_12_card_2_title') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-simple-steps icon-bg-style">
                        <i class="flaticon-contract"></i>
                        <h3>{{ __('home.section_12_card_3_title') }}</h3>
                        <p>{{ __('home.section_12_card_3_title') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .fade-in {
            animation: fadeIn ease 2s;
            -webkit-animation: fadeIn ease 2s;
            -moz-animation: fadeIn ease 2s;
            -o-animation: fadeIn ease 2s;
            -ms-animation: fadeIn ease 2s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-ms-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    <script>
        $(function() {
            var curImg = 0;
            var images = [
                'assets/images/banner/banner_1.png',
                'assets/images/japantravel.webp',
                'assets/images/about-img-2.jpg',
                'assets/images/grant-unviversity.webp',
            ]
            var titles = [
                '{{ __('home.description') }}',
                "{{ __('home.description2') }}",
                '{{ __('home.description3') }}',
                '{{ __('home.description4') }}',
            ]
            setInterval(function() {
                $("#banner_image").attr("src", images[curImg]);
                $("#banner_title").html(titles[curImg]);
                // Image change animation
                $("#banner_image").addClass("fade-in");
                setTimeout(function() {
                    $("#banner_image").removeClass("fade-in");
                }, 1000);

                if (curImg == images.length) {
                    curImg = 0;
                } else {
                    curImg++;
                }
            }, 5000);
        });
    </script>
    {{-- <section class="application-submit-area" id="applicationform">
        <div class="container">
            <div class="application-submit-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h2>{{ __('home.section_application_title') }}</h2>
                            <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
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
    </section> --}}
@endsection
