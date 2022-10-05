@extends('layouts.app')

@section('content')
    <x-breadcrumb title="Jobs" />
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
@endsection
