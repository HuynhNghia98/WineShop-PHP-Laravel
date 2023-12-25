@extends('layout.app')
@section('content')
    <section class="bg-seaShell py-3">
        <div class="container">
            <div class="fs-3 text-danger fw-bold bg-white p-3 mb-3" style="border-top: 3px solid var(--color-red);">
                Change Information
            </div>
            <div class="container bg-white py-5 px-5">
                <form action="" method="post">
                    @csrf
                    {{-- name --}}
                    <div class="row mb-3">
                        <label class="col-form-label col-1" for="userName">Name:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="username" id="userName"
                                value="{{ $viewData['user']->getName() }}">
                        </div>
                    </div>
                    {{-- email --}}
                    <div class="row mb-4">
                        <label class="col-form-label col-1" for="userName">Email:</label>
                        <div class="col-5">
                            <input class="form-control" type="email" name="email" id="userName"
                                value="{{ $viewData['user']->getEmail() }}" disabled>
                        </div>
                    </div>
                    <button class="btn px-3 py-2 text-white" type="submit"
                        style="background-color: var(--color-red);"><strong>Change</strong></button>
                    <a class="btn btn-dark px-3 py-2 text-white" href="{{ route('customer.user.index') }}"><strong>Return
                            Back</strong></a>
                </form>
            </div>
        </div>
    </section>
@endsection
