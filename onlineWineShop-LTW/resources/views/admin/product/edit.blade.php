@extends('layout.admin')
@section('title', 'Edit Product')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Edit Product</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.product.create') }}">Product</a></li>
                            <li class="breadcrumb-item active">Edit</li>
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
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="mx-4">
                            <div class="row">
                                <label class="col-md-1 col-form-label">Name:</label>
                                <div class="col-md-5">
                                    <input name="name" value="{{ $viewData['product']->getName() }}" type="text"
                                        class="form-control">
                                </div>
                                <label class="col-md-1 col-form-label text-end pe-5">Category:</label>
                                <select name="categorySelect" id="categorySelect" class="form-select col-md-5"
                                    style="width:250px;" aria-label="Default select example">
                                    @foreach ($viewData['categories'] as $item)
                                        <option
                                            {{ $item->getId() == $viewData['category']->getId() ? "selected='selected'" : '' }}
                                            value="{{ $item->getName() }}">{{ $item->getName() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row my-2">
                                <label class="col-md-1 col-form-label">Quantity:</label>
                                <div class="col-md-2">
                                    <input name="quantity" value="{{ $viewData['product']->getQuantiTy() }}" type="number"
                                        class="form-control">
                                </div>
                                <label class="col-md-1 col-form-label">Price:</label>
                                <div class="col-md-2">
                                    <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number"
                                        step="0.01" class="form-control">
                                </div>
                            </div>

                            <div class="row my-2">
                                <label class="col-md-1 col-form-label">Region:</label>
                                <div class="col-md-2">
                                    <input name="region" value="{{ $viewData['product']->getRegion() }}" type="text"
                                        class="form-control">
                                </div>
                                <label class="col-md-1 col-form-label">ABV:</label>
                                <div class="col-md-2">
                                    <input name="abv" value="{{ $viewData['product']->getAbv() }}" type="number"
                                        step="0.01" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">Image:</label>
                                <div class="col-md-5">
                                    <input name="image" value="{{ $viewData['product']->getQuantity() }}" type="file"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="my-4">
                                <label class="form-label">Description:</label>
                                <textarea class="form-control" name="description" rows="5">{{ $viewData['product']->getDescription() }}
                            </textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
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
