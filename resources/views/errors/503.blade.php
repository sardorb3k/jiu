@extends('layouts.app')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>5 <span>0</span> 3</h1>
                    <h3>{{ __('errors.503.title') }}</h3>
                    <p>{{ __('errors.503.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.503.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
