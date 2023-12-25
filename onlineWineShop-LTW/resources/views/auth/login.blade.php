@extends('layout.login')
@section('loginContent')
    <section class="bg-seaShell">
        <div class="row">
            <div class="col p-0 d-none d-lg-block">
                <img id="imgCheers" src="/image/cheers.png" alt="">
            </div>
            <div class="col p-0">
                <div class="container pt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">

                            <div class="border rounded-0 bg-white p-5">
                                <h2 class="mb-4"><strong>{{ __('Sign In') }}</strong></h2>
                                <div class="">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <div class="form-floating">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                <label id="emailLabel" for="email"
                                                    class="">{{ __('Email') }}</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="form-floating">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                                <label id="passwordLabel" for="password"
                                                    class="">{{ __('Password') }}</label>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div style="margin-top: 30px">
                                            <button id="loginSubmitBtn" type="submit">
                                                <strong>{{ __('Sign In') }}</strong>
                                            </button>
                                        </div>
                                        <div class="text-center py-4">
                                            @if (Route::has('password.request'))
                                                <a class="" id="forgotPassLink"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div style="margin-top: 4px">
                                            <a class="text-decoration-none btn" id="backLink"
                                                href="{{ route('customer.home.index') }}">
                                                {{ __('Back to Home Page') }}
                                            </a>
                                        </div>
                                        <div class="text-center py-4">Don't have an account yet?
                                            <a class="text-decoration-none" style="color: #e53131;" id="createAccountLink"
                                                href="{{ route('register') }}">
                                                {{ __('Create an account') }}
                                            </a>
                                        </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
