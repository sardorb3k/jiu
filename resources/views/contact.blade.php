@extends('layouts.app')
@section('title', __('contact.site_title'))
@section('content')
    <x-breadcrumb title="{{ __('contact.site_title') }}" />
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3077.5968400730185!2d-119.76188708437041!3d39.523588017394154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80993f3dfa5eeaf5%3A0x70954ca5a06c2014!2s1312%20Greg%20St%2C%20Sparks%2C%20NV%2089431%2C%20USA!5e0!3m2!1sen!2sbd!4v1615354573837!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2>{{ __('contact.map_title') }}</h2>

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-2-fill"></i>
                                <span>{{ __('contact.map_address') }}</span>
                                {{ $system->site_address }}
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <span>{{ __('contact.map_email') }}</span>
                                <a href="mailto:{{ $system->site_email }}"><span>{{ $system->site_email }}</span></a>
                            </li>
                            <li>
                                <i class="ri-phone-fill"></i>
                                <span>{{ __('contact.map_phone') }}</span>
                                <a
                                    href="tel:+{{ $system->site_phone }}">+{{ sprintf('(%s) %s %s %s %s', substr($system->site_phone, 0, 3), substr($system->site_phone, 3, 2), substr($system->site_phone, 5, 3), substr($system->site_phone, 6, 2), substr($system->site_phone, 10, 2)) }}</a>
                            </li>
                        </ul>

                        <h3>{{ __('contact.map_follow') }}</h3>

                        <ul class="social-link">
                            @if ($system->site_facebook)
                                <li>
                                    <a href="{{ $system->site_facebook }}" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                            @endif
                            @if ($system->site_instagram)
                                <li>
                                    <a href="{{ $system->site_instagram }}" target="_blank">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                </li>
                            @endif
                            @if ($system->site_youtube)
                                <li>
                                    <a href="{{ $system->site_youtube }}" target="_blank">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                </li>
                            @endif
                            @if ($system->site_telegram)
                                <li>
                                    <a href="{{ $system->site_telegram }}" target="_blank">
                                        <i class="ri-telegram-fill"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('contact.title') }}</h2>
                <p>{{ __('contact.description') }}</p>
            </div>

            <form method="POST" action="{{ route('contact_store') }}" class="form-validate" novalidate="novalidate"
                id="contactForm">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>{{ __('contact.form_name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                data-error="{{ __('contact.form_name_error') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>{{ __('contact.form_email') }}</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="{{ __('contact.form_email_error') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>{{ __('contact.form_phone') }}</label>
                            <input type="text" name="phone_number" id="phone_number" required
                                data-error="{{ __('contact.form_phone_error') }}" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>{{ __('contact.form_subject') }}</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                data-error="{{ __('contact.form_subject_error') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>{{ __('contact.form_message') }}</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                data-error="{{ __('contact.form_message_error') }}"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <input type="submit" class="default-btn" value="{{ __('contact.form_send') }}"
                            style="border: 0px">
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                    @if (session('success') || session('error'))
                        <div class="mt-5" style="background-color: #f3f3f4;padding: 30px;">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <p>{{ session('success') }} {{ session('error') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </section>
@endsection
