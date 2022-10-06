@extends('layouts.app')
@section('title', __('jobs.title'))
@section('content')
    <x-breadcrumb title="{{ __('jobs.title') }}" />
    <section class="terms-conditions-area ptb-100">
        <div class="container">
            <div class="main-default-content about-content">
                <h2>{{ __('jobs.content_title') }}</h2>
                <p>{{ __('jobs.content_desc') }}</p>
                <div class="gap-20"></div>
                <h2>{{ __('jobs.section_title') }}</h2>
                <span>{{ __('jobs.jobs_1') }}</span>
                <ul>
                    <li>{{ __('jobs.jobs_1_item_1') }}</li>
                    <li>{{ __('jobs.jobs_1_item_2') }}</li>
                    <li>{{ __('jobs.jobs_1_item_3') }}</li>
                </ul>
                <div class="gap-20"></div>
                <span>{{ __('jobs.jobs_2') }}</span>
                <div class="gap-20"></div>
                <span>{{ __('jobs.jobs_3') }}</span>
                <div class="gap-20"></div>
            </div>
        </div>
    </section>
@endsection
