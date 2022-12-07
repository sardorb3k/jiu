@extends('layouts.app')

@section('title', __('JIU - Japanese International University'))
@section('code', '404')
@section('message', __('Not Found'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    {{-- <h1>4 <span>0</span> 4</h1> --}}
                    <h3>{{ __('errors.404.title') }}</h3>
                    <p>{{ __('errors.404.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.404.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
