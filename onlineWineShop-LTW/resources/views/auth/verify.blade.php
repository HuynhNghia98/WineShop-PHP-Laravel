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
                                <div>{{ __('Verify Your Email Address') }}</div>

                                <div>
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
