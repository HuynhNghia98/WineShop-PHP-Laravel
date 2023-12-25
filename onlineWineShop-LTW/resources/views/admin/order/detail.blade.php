@extends('layout.admin')
@section('title', 'Order Details')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Detail</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.order.index') }}">Order</a></li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card rounded-0 border-0    ">
                <div class="card-body">
                    <h3 class="border-bottom pb-2 mb-2"><strong>#{{ $viewData['order']->getId() }} Order</strong></h3>
                    {{-- Table --}}
                    <div class="my-3">
                        <table id="myTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-beige" style="width: 4%;">
                                        ID
                                    </th>
                                    <th class="bg-beige" style="width: 5%">
                                        Image
                                    </th>
                                    <th class="bg-beige">
                                        Product Name
                                    </th>
                                    <th class="bg-beige">
                                        Quantity
                                    </th>
                                    <th class="bg-beige">
                                        Subtotal Price
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($viewData['items'] as $item)
                                    <tr>
                                        <td>
                                            {{ $item->getId() }}
                                        </td>
                                        <td>
                                            <img class="img-fluid" style="width: 100%;height:70px;"
                                                src="{{ asset('/storage/' . $item->getProduct()->getImage()) }}"
                                                alt="Image">
                                        </td>
                                        <td>
                                            {{ $item->getProduct()->getName() }}
                                        </td>
                                        <td>
                                            {{ $item->getQuantity() }}
                                        </td>
                                        <td>
                                            {{ $item->getQuantity() * $item->getProduct()->getPrice() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- btn --}}
                    <div>
                        <a class="btn btn-dark text-white" href="{{ route('admin.order.index') }}">Back to Order</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
