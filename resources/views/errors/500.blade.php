@extends('layouts.app')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>5 <span>0</span> 0</h1>
                    <h3>{{ __('errors.500.title') }}</h3>
                    <p>{{ __('errors.500.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.500.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
