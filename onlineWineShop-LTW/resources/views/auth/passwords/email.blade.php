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
                                <h2 class="mb-4"><strong>{{ __('Reset Password') }}</strong></h2>
                                <div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <div class="form-floating">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                <label for="email" class="">{{ __('Email Address') }}</label>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-0">
                                            <div class="text-center">
                                                <button type="submit" class="btn text-white px-4 py-3 mb-2 fs-5"
                                                    style="background-color: var(--color-red); width:100%;">
                                                    <strong>
                                                        {{ __('Send Password Reset Link') }}
                                                    </strong>
                                                </button>
                                                <a class="text-decoration-none btn" id="backLink"
                                                    href="{{ route('login') }}">
                                                    {{ __('Back to Login') }}
                                                </a>
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
