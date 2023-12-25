@extends('layout.admin')
@section('title', 'User Management')
@section('admincontent')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0"><strong>User Management</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card rounded-0 border-0">
                <div class="card-body">
                    <div class="my-3">
                        <table id="myTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-beige" style="width: 4%;">
                                        ID
                                    </th>
                                    <th class="bg-beige" style="width: 5%">
                                        Name
                                    </th>
                                    <th class="bg-beige">
                                        Email
                                    </th>
                                    <th class="bg-beige">
                                        Role
                                    </th>
                                    <th class="bg-beige">
                                        Balance
                                    </th>
                                    <th class="bg-beige">
                                        Create Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($viewData['users'] as $user)
                                    <tr>
                                        <td>
                                            {{ $user->getId() }}
                                        </td>
                                        <td>
                                            {{ $user->getName() }}
                                        </td>
                                        <td>
                                            {{ $user->getEmail() }}
                                        </td>
                                        <td>
                                            {{ $user->getRole() }}
                                        </td>
                                        <td>
                                            {{ $user->getBalance() }}
                                        </td>
                                        <td>
                                            {{ $user->getCreatedAt() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
