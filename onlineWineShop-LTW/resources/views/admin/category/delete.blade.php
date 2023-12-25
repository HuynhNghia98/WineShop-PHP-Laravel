@extends('layout.admin')
@section('title', 'Delete Category')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h3 class="m-0"><strong>Delete Category</strong></h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
                            <li class="breadcrumb-item active">Delete</li>
                        </ol>
                    </div>
                </div>
            </div>
            {{-- Main Content --}}
            <div class="card mb-4 rounded-0 border-0">

                <div class="card-body">
                    @if ($errors->any())
                        <ul class="alert alert-danger list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form method="post" action="">
                        @csrf
                        @method('DELETE')
                        <div class="mx-4">
                            <div class="row">
                                <label class="col-md-1 col-form-label">Name:</label>
                                <div class="col-md-5">
                                    <input name="name" value="{{ $viewData['category']->getName() }}" type="text"
                                        class="form-control" disabled>
                                </div>
                            </div>
                            <div class="my-4">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="10" disabled>{{ $viewData['category']->getDescription() }}
                            </textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-dark">
                                Back to Category Manage
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
