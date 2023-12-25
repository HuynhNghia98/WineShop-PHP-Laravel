@extends('layout.admin')
@section('title', 'Order Management')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Order Management</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card rounded-0 border-0    ">
                <div class="card-body">
                    {{-- Table --}}
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="bg-beige" style="width: 4%;">
                                    ID
                                </th>
                                <th class="bg-beige">
                                    Customer
                                </th>
                                <th class="bg-beige">
                                    Total
                                </th>
                                <th class="bg-beige" style="width: 15%;">
                                    Buy Time
                                </th>
                                <th class="bg-beige" style="width: 10%;">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData['orders'] as $item)
                                <tr>
                                    <td>
                                        {{ $item->getId() }}
                                    </td>
                                    <td>
                                        {{ $item->getUser()->getname() }}
                                    </td>
                                    <td>
                                        {{ $item->getTotal() }}
                                    </td>
                                    <td>
                                        {{ $item->getCreatedAt() }}
                                    </td>
                                    <td class="text-center" style="max-width: 100px;">
                                        <a href="{{ route('admin.order.detail', ['id' => $item->getId()]) }}"
                                            class="btn btn-dark px-2 py-1">
                                            <i class="fa-solid fa-bars"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
