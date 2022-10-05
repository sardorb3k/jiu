@extends('layouts.app')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))

@section('content')
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span>0</span> 3</h1>
                    <h3>{{ __('errors.403.title') }}</h3>
                    <p>{{ __('errors.403.description') }}</p>

                    <a href="{{ route('home') }}" class="default-btn two">
                        {{ __('errors.403.link') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
