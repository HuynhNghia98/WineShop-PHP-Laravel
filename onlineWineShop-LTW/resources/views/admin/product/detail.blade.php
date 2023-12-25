@extends('layout.admin')
@section('title', 'Product Details')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Product Details</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.product.create') }}">Product</a></li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
            {{-- Main Content --}}
            <div class="card mb-4 rounded-0 border-0">
                <div class="card-body custom-border-top-2 custom-border-bottom-2">
                    <div class="row mx-4">
                        <div class="col-4 col-sm-12 col-md-4 col-lg-4">
                            <img class="img-fluid" style="height: 400px;"
                                src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" alt="Image">
                        </div>
                        <div class="col-8 col-sm-12 col-md-8">
                            <div class="row">
                                <h2 class="col fs-1"><strong>{{ $viewData['product']->getName() }}</strong></h2>
                            </div>

                            <div class="row custom-border-top-1 mt-3">
                                <div class="col-3 fs-6 bg-prey py-3 px-3"><strong>Category:</strong></div>
                                <div class="col fs-6 py-3 px-3">{{ $viewData['category']->getName() }}</div>
                            </div>
                            <div class="row custom-border-top-1">
                                <div class="col-3 fs-6 bg-prey py-3 px-3"><strong>Quantity:</strong></div>
                                <div class="col fs-6 py-3 px-3">{{ $viewData['product']->getQuantity() }}</div>
                            </div>
                            <div class="row custom-border-top-1 custom-border-bottom-1">
                                <div class="col-3 fs-6 bg-prey py-3 px-3"><strong>Price:</strong></div>
                                <div class="col fs-6 py-3 px-3">{{ $viewData['product']->getPrice() }}</div>
                            </div>
                            <div class="row custom-border-top-1 custom-border-bottom-1">
                                <div class="col-3 fs-6 bg-prey py-3 px-3"><strong>Region:</strong></div>
                                <div class="col fs-6 py-3 px-3">{{ $viewData['product']->getRegion() }}</div>
                            </div>
                            <div class="row custom-border-top-1 custom-border-bottom-1">
                                <div class="col-3 fs-6 bg-prey py-3 px-3"><strong>ABV:</strong></div>
                                <div class="col fs-6 py-3 px-3">{{ $viewData['product']->getAbv() }}%</div>
                            </div>

                            <div class="my-4">
                                <a href="{{ route('admin.product.index') }}" class="btn btn-dark">
                                    Back to Product Manage
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="border-top border-bottom mb-5 py-5">
                        <h3 class="fs-3"><strong>Description:</strong></h3>
                        <div class="fs-6 mt-3">{{ $viewData['product']->getDescription() }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
