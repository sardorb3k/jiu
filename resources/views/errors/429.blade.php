@extends('layouts.app')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span>2</span> 9</h1>
                    <h3>{{ __('errors.429.title') }}</h3>
                    <p>{{ __('errors.429.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.429.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
