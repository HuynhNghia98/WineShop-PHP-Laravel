<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Management')</title>
    <link href="{{ asset('/css/ad.css') }}" rel="stylesheet" />
    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet" />
    <!-- Theme style -->
    <link href="{{ asset('/css/adminlte.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div style="text-align: center; width: 100%; text-transform: uppercase; ">
                <h4 class="mt-2 mx-5 fw-bold "><strong>ADMIN MANAGEMENT</strong></h4>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="mt-3">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->getName() }}
                        </a>
                        <ul class="dropdown-menu rounded-0 w-100">
                            <li class="text-center">
                                <form id="logout" action="{{ route('logout') }}" method="POST">
                                    <a role="button" class="dropdown-item text-dark"
                                        onclick="document.getElementById('logout').submit();">
                                        Logout
                                    </a>
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-3 ">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item ">
                            <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-tag fa-lg"></i>
                                <p> Product Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-folder fa-lg"></i>
                                <p> Category Management</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.order.index') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-clipboard fa-lg"></i>
                                <p> Order Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-address-card fa-lg"></i>
                                <p> User Management</p>
                            </a>
                        </li>
                        <li class="nav-item text-center mt-2">
                            <a href="{{ route('customer.home.index') }}" class="btn btn-primary text-white"
                                style="width: 100%;">
                                Back to Home Page
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <script>
            // Lấy URL hiện tại
            const currentUrl = window.location.href;

            // Lặp qua tất cả các thẻ <a> trong danh sách và so sánh URL với href của mỗi thẻ
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if (currentUrl === link.href) {
                    // Nếu URL hiện tại trùng với href của thẻ <a>, thêm lớp "active"
                    link.classList.add('active');
                }
            });
        </script>
        @yield('admincontent')
        @yield('script')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- jQuery -->
        <script src="/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/js/bootstrap.bundle.min.js"></script>
        <!-- Admin -->
        <script src="/js/adminlte.js"></script>
        <!-- Admin dashboard  -->
        <script src="/js/dashboard3.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
        <script>
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("{{ session('success') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.error("{{ session('error') }}");
            @endif
        </script>
</body>

</html>
