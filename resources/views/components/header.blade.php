<!-- Start Header Area -->
<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="header-left-content">
                        <li>
                            <a href="tel:{{ $system->site_phone }}">
                                <i class="ri-phone-fill"></i>
                                +{{ sprintf('(%s) %s %s %s %s', substr($system->site_phone, 0, 3), substr($system->site_phone, 3, 2), substr($system->site_phone, 5, 3), substr($system->site_phone, 8, 2), substr($system->site_phone, 10, 2)) }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="header-right-content">
                        <div class="languages-switcher">
                            <i class="ri-global-line"></i>
                            <select id="language">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <option value="{{ $lang }}">{{ $language['display'] }}</option>
                                    @else
                                        <option value="{{ $lang }}" selected>{{ $language['display'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="my-account">
                            @guest
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}">
                                        <i class="ri-user-fill"></i>
                                    </a>
                                @endif
                            @else
                                <a href="{{ url('/dashboard') }}">
                                    <i class="ri-user-fill"></i>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('uploads/' . $system->site_logo) }}" alt="{{ $system->site_name }}">
                        </a>
                    </div>

                    <div class="others-options-for-mobile-devices">
                        <ul>
                            <li>
                                @guest
                                    @if (Route::has('login'))
                                        <a href="{{ url('/register') }}" class="default-btn">
                                            {{ __('site.application') }}
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ route('dashboard.index') }}" class="default-btn">
                                        {{ __('site.application') }}
                                    </a>
                                @endguest
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('uploads/' . $system->site_logo) }}" alt="{{ $system->site_name }}"
                            width="130">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">{{ __('menu.home') }}</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{ __('menu.examination') }}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/page/examination-application') }}"
                                            class="nav-link">{{ __('menu.examination_application') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/examination-procedure') }}"
                                            class="nav-link">{{ __('menu.examination_procedure') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/examination-procedure#english') }}"
                                            class="nav-link">{{ __('menu.examination_exam') }}</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ url('/page/examination-procedure#math') }}"
                                            class="nav-link">{{ __('menu.examination_math') }}</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{ url('/page/examination-results') }}"
                                            class="nav-link">{{ __('menu.examination_results') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/examination-verification') }}"
                                            class="nav-link">{{ __('menu.examination_verification') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{ __('menu.admission') }}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/page/admission') }}"
                                            class="nav-link">{{ __('menu.admission_apply') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.admission_foundation_business') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundation-programme') }}"
                                            class="nav-link">{{ __('menu.admission_fees') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.admisson_direct') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{ __('menu.undergraduate') }}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/page/admission') }}"
                                            class="nav-link">{{ __('menu.undergraduate_prefoundation') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.undergraduate_fundation') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundation-programme') }}"
                                            class="nav-link">{{ __('menu.undergraduate_businessmanagement') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.undergraduate_finance') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.undergraduate_it') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.undergraduate_pedagogy') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.undergraduate_tourism') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/foundationin-business') }}"
                                            class="nav-link">{{ __('menu.undergraduate_japan') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{ __('menu.opportunites') }}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/#about') }}"
                                            class="nav-link">{{ __('menu.opportunites_life') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/executive-council') }}"
                                            class="nav-link">{{ __('menu.opportunites_company') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/academic-council') }}"
                                            class="nav-link">{{ __('menu.opportunites_workstudyjapan') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/#ourmission') }}"
                                            class="nav-link">{{ __('menu.opportunites_worktravel_usa') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{ __('menu.about') }}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/#about') }}"
                                            class="nav-link">{{ __('menu.about_why') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/executive-council') }}"
                                            class="nav-link">{{ __('menu.about_executive') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/page/academic-council') }}"
                                            class="nav-link">{{ __('menu.about_academic') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/#ourmission') }}"
                                            class="nav-link">{{ __('menu.about_license') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('jobs') }}"
                                            class="nav-link">{{ __('menu.jobs_vacancies') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}"
                                            class="nav-link">{{ __('menu.contact') }}</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ url('/induction') }}" class="nav-link">{{ __('menu.induction') }}</a>
                            </li> --}}
                        </ul>

                        <div class="others-options">
                            <ul>
                                <li>
                                    <a href="https://forms.amocrm.ru/rltmmwd" class="default-btn">
                                        {{ __('site.application') }}
                                    </a>
                                    {{-- @guest
                                        @if (Route::has('login'))
                                            <a href="{{ url('/register') }}" class="default-btn">
                                                {{ __('site.application') }}
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ route('dashboard.index') }}" class="default-btn">
                                            {{ __('site.application') }}
                                        </a>
                                    @endguest --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

<script>
    document.querySelectorAll("#language")[0].addEventListener('change', (e) => {
        window.location = "/lang/" + e.target.value;
    });
</script>
