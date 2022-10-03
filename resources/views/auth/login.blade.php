@extends('layouts.app')

@section('content')
    <x-breadcrumb title="Log in" />
    <section class="user-area ptb-100">
        <div class="container">
            <div class="user-form-content max-width-600">
                <form method="POST" action="{{ route('login') }}" class="user-form">
                    @csrf

                    <h3>Log in to your account</h3>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    name="phone" value="{{ old('phone') }}" id="phone" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                    name="password" value="{{ old('email') }}" id="password" required autocomplete="email" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="login-action">
                                <span class="log-rem">
                                    <input id="remember" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remeber">Keep me logged in</label>
                                </span>

                                @if (Route::has('password.request'))
                                    <span class="forgot-login">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Log in
                            </button>
                        </div>

                        <div class="col-12">
                            @if (Route::has('password.request'))
                                <p class="create">Don’t have an account? <a href="{{ route('register') }}">create</a></p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </section>
    <script>
        $("#phone").inputmask({
            "mask": "999 (99) 999-99-99"
        });
    </script>
@endsection
