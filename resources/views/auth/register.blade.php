@extends('layouts.app')

@section('content')
    <x-breadcrumb title="Register" />

    <!-- Start User Area -->
    <section class="user-area ptb-100">
        <div class="container">
            <div class="user-form-content max-width-600">
                <form method="POST" action="{{ route('register') }}" class="user-form">
                    @csrf

                    <h3>Create an account</h3>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="firstname">{{ __('firstname') }}</label>
                                <input class="form-control @error('firstname') error @enderror" type="text" id="firstname"
                                    name="firstname" required>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="lastname">{{ __('lastname') }}</label>
                                <input class="form-control @error('lastname') error @enderror" type="text" id="lastname"
                                    name="lastname" required>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="phone">{{ __('phone') }}</label>
                                <input class="form-control @error('phone') error @enderror" type="tel" name="phone" id="phone" id="phone" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input class="form-control @error('password') error @enderror" type="password" id="password"
                                    name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input class="form-control @error('password_confirmation') error @enderror" type="password" id="password_confirmation"
                                    name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn register" type="submit">
                                Register now
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
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
