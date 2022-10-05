@extends('layouts.app')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span>1</span> 9</h1>
                    <h3>{{ __('errors.419.title') }}</h3>
                    <p>{{ __('errors.419.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.419.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
