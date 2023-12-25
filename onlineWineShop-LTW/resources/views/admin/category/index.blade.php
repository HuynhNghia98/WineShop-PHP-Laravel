@extends('layout.admin')
@section('title', 'Category Management')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>Category Management</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card rounded-0 border-0    ">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-6">
                            <!-- Tao product -->
                            <div class="dt-buttons btn-group flex-wrap">
                                <div class="text-end">
                                    @if (auth()->user()->getRole() == 'admin')
                                        <!-- Kiểm tra xem người dùng có vai trò admin hay không -->
                                        <a class="btn btn-success py-2 " href="{{ route('admin.category.create') }}"><i
                                                class="fa-regular fa-square-plus fs-4"></i> Create
                                            New Category</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Table --}}
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="bg-beige" style="width: 4%;">
                                    ID
                                </th>
                                <th class="bg-beige" style="width: 20%;">
                                    Name
                                </th>
                                <th class="bg-beige">
                                    Description
                                </th>
                                <th class="bg-beige" style="width: 15%;">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData['categories'] as $item)
                                <tr>
                                    <td>
                                        {{ $item->getId() }}
                                    </td>
                                    <td>
                                        {{ $item->getname() }}
                                    </td>
                                    <td class="text-truncate" style="height: 0px; max-width:550px; overflow:hidden">
                                        {{ $item->getDescription() }}
                                    </td>
                                    <td class="text-center" style="max-width: 100px;">
                                        <a href="{{ route('admin.category.edit', ['id' => $item->getId()]) }}"
                                            class="btn btn-warning px-2 py-1">
                                            <i class="fa-solid fa-pen-to-square text-white"></i>
                                        </a>
                                        <a href="{{ route('admin.category.delete', ['id' => $item->getId()]) }}"
                                            class="btn btn-outline-danger px-2 py-1">
                                            <i class="fa-solid fa-trash-can text-danger"></i>
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
