@extends('layout.app')
@section('content')
    <section class="bg-seaShell py-3">
        <div class="container">
            <div class="fs-3 text-danger fw-bold bg-white p-3 mb-3" style="border-top: 3px solid var(--color-red);">
                User Information
            </div>
            <div class="container bg-white py-5 px-5">
                {{-- name --}}
                <div class="row mb-3">
                    <label class="col-form-label col-1" for="userName">Name:</label>
                    <div class="col-5">
                        <input class="form-control" type="text" name="name" id="userName"
                            value="{{ $viewData['user']->getName() }}" disabled>
                    </div>
                </div>
                {{-- email --}}
                <div class="row mb-3">
                    <label class="col-form-label col-1" for="userName">Email:</label>
                    <div class="col-5">
                        <input class="form-control" type="text" name="email" id="userName"
                            value="{{ $viewData['user']->getEmail() }}" disabled>
                    </div>
                </div>
                {{-- balance --}}
                <div class="row mb-4">
                    <label class="col-form-label col-1" for="userName">Balance:</label>
                    <div class="col-2">
                        <input class="form-control" type="text" name="text" id="userName"
                            value="${{ $viewData['user']->getBalance() }}" disabled>
                    </div>
                </div>
                <div>
                    <a class="btn btn-warning px-3 py-2 text-white" href="{{ route('customer.user.edit') }}"><strong>Change
                            Your
                            Info</strong></a>
                    <a class="btn px-3 py-2 text-white" style="background-color: var(--color-red);"
                        href="{{ route('customer.user.add') }}"><strong>Add
                            Balance</strong></a>
                    <a class="btn btn-dark px-3 py-2 text-white" href="{{ route('customer.home.index') }}"><strong>Back to
                            Home</strong></a>
                </div>
            </div>
        </div>
    </section>
@endsection
