@extends('layout.login')
@section('loginContent')
    <section class="bg-seaShell">
        <div class="row">
            <div class="col p-0">
                <img id="imgCheers" src="/image/cheers.png" alt="">
            </div>
            <div class="col p-0">
                <div class="container pt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="border rounded-0 bg-white p-5">
                                <h2 class="mb-4"><strong>{{ __('Register') }}</strong></h2>
                                <div class="">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class=" mb-3">
                                            <div class="form-floating">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                <label for="name" id="emailRegisterLabel">{{ __('Name') }}</label>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class=" mb-3">
                                            <div class="form-floating">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email">
                                                <label for="email">{{ __('Email Address') }}</label>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class=" mb-3">
                                            <div class="form-floating">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">
                                                <label for="password">{{ __('Password') }}</label>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class=" mb-3">
                                            <div class="form-floating">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                            </div>
                                        </div>

                                        <div style="margin-top: 30px">
                                            <button id="registerSubmitBtn" type="submit">
                                                {{ __('Register') }}
                                            </button>
                                        </div>

                                        <div style="margin-top: 10px">
                                            <a class="text-decoration-none btn" id="backLink"
                                                href="{{ route('customer.home.index') }}">
                                                {{ __('Back to Home Page') }}
                                            </a>
                                        </div>
                                        <div class="text-center py-3">
                                            <a class="text-decoration-none" style="color: #e53131;" id="createAccountLink"
                                                href="{{ route('login') }}">
                                                {{ __('Sign In') }}
                                            </a>
                                        </div>
                                    </form>
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
