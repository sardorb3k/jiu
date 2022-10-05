@extends('layouts.app')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span>0</span> 1</h1>
                    <h3>{{ __('errors.401.title') }}</h3>
                    <p>{{ __('errors.401.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.401.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
