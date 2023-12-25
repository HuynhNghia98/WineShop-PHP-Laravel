@extends('layout.admin')
@section('title', 'Create Product')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Create Product</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.product.create') }}">Product</a></li>
                            <li class="breadcrumb-item active">Create</li>
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
                    <form method="post" action="{{ route('admin.product.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mx-4">
                            <div class="row">
                                <label class="col-md-1 col-form-label">Name:</label>
                                <div class="col-md-5">
                                    <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                                </div>
                                <label class="col-md-1 col-form-label text-end pe-5">Category:</label>
                                <select class="form-select col-md-5" style="width:100%;" aria-label="Default select example"
                                    name="categoryName">
                                    <option>Category of Product</option>
                                    @foreach ($viewData['categories'] as $item)
                                        <option value="{{ $item->getName() }}">{{ $item->getName() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row my-2">
                                <label class="col-md-1 col-form-label">Quantity:</label>
                                <div class="col-md-2">
                                    <input name="quantity" value="{{ old('quantity') }}" type="number"
                                        class="form-control">
                                </div>
                                <label class="col-md-1 col-form-label">Price:</label>
                                <div class="col-md-2">
                                    <input name="price" value="{{ old('price') }}" type="number" step="0.01"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row my-2">
                                <label class="col-md-1 col-form-label">Region:</label>
                                <div class="col-md-2">
                                    <input name="region" value="{{ old('region') }}" type="text" class="form-control">
                                </div>
                                <label class="col-md-1 col-form-label">ABV:</label>
                                <div class="col-md-2">
                                    <input name="abv" value="{{ old('abv') }}" type="number" step="0.01"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-1 col-form-label">Image:</label>
                                <div class="col-md-5">
                                    <input name="image" value="{{ old('image') }}" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="my-4">
                                <label class="form-label">Description:</label>
                                <textarea class="form-control" name="description" rows="5" style="max-width:100%;">
                            </textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="{{ route('admin.product.index') }}" class="btn btn-dark">
                                Back to Product Manage
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
