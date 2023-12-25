@extends('layout.app')
@section('content')
    <section class="bg-seaShell py-3">
        <div class="container">
            <div class="fs-3 text-danger fw-bold bg-white p-3 mb-3" style="border-top: 3px solid var(--color-red);">
                Add Balance
            </div>
            <div class="container bg-white py-4 px-5">
                <div class="row mb-3">
                    <strong class="fs-5">Credit/Debit Card:</strong>
                </div>
                <form action="" method="post">
                    @csrf
                    {{-- name --}}
                    <div class="row mb-3">
                        <label class="col-form-label col-2" for="userName">Name Card:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="nameCard" id="userName" value="">
                        </div>
                    </div>
                    {{-- email --}}
                    <div class="row mb-3">
                        <label class="col-form-label col-2" for="userName">ID Card:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="idCard" id="userName" value="">
                        </div>
                    </div>
                    {{-- balance --}}
                    <div class="row mb-3">
                        <label class="col-form-label col-2" for="userName">Your Balance Now:</label>
                        <div class="col-2">
                            <input class="form-control" type="text" name="balanceNow" id="userName"
                                value="${{ $viewData['user']->getBalance() }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-form-label col-2" for="userName">Add more Balance:</label>
                        <div class="col-2">
                            <input class="form-control" type="text" name="balance" id="userName" value="">
                        </div>
                    </div>
                    <button class="btn px-4 py-2 text-white" style="background-color: var(--color-red);"
                        type="submit"><strong>Add
                            Balance</strong></button>
                    <a class="btn btn-dark px-3 py-2 text-white" href="{{ route('customer.user.index') }}"><strong>Return
                            Back</strong></a>
                </form>
            </div>
        </div>
    </section>
@endsection
