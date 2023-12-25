@extends('layout.admin')
@section('admincontent')
    <!-- Content Wrapper. -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Dashboard</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"></a>Admin</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="card">
                <div class="container-fluid">
                    <div class="row mt-5 px-5">
                        <div class="col-sm-12 col-lg-6">
                            <a href="{{ route('admin.user.index') }}">
                                <div class="widget-small primary coloured-icon">
                                    <i class='icon bx bxs-user-account fa-3x'></i>
                                    <div class="info">
                                        <h4>Total Customers</h4>
                                        <p><b>{{ $viewData['totalCustomers'] }} customers</b></p>
                                        <p class="info-tong">Total number of customers managed.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <a href="{{ route('admin.product.index') }}">
                                <div class="widget-small info coloured-icon">
                                    <i class='icon bx bxs-data fa-3x'></i>
                                    <div class="info">
                                        <h4>Total Products</h4>
                                        <p><b>{{ $viewData['totalProducts'] }} products</b></p>
                                        <p class="info-tong">Total number of products managed.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="row mt-3 mb-5 px-5">
                        <div class="col-sm-12 col-lg-6">
                            <a href="{{ route('admin.order.index') }}">
                                <div class="widget-small warning coloured-icon">
                                    <i class='icon bx bxs-shopping-bags fa-3x '></i>
                                    <div class="info">
                                        <h4>Total Orders</h4>
                                        <p><b>{{ $viewData['totalOrders'] }} orders</b></p>
                                        <p class="info-tong">Total number of sales invoices in the month.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-6 ">
                            <a href="{{ route('admin.category.index') }}">
                                <div class="widget-small danger coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                                    <div class="info">
                                        <h4>Total Categories</h4>
                                        <p><b>{{ $viewData['totalCategories'] }} categories</b></p>
                                        <p class="info-tong">Total number of products managed.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
