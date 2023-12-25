<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/product.css') }}" rel="stylesheet" />

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Varela+Round&display=swap"
        rel="stylesheet">
    {{-- font-awesome --}}
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/css/all.min.css">
    {{-- Nunito Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>@yield('title', 'Online Wine Store')</title>
</head>

<body class="">
    <header class="sticky-top">
        <nav id="top-nav" class="navbar navbar-expand-sm navbar-toggleable-sm box-shadow py-0">
            <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fs-3 px-3 ms-sm-4 ms-0 me-0" href="{{ route('customer.home.index') }}">
                <img class="img-fluid" id="logoId" src="/image/logoWeb.png" alt="Logo Image"
                    style="height: 60px;width:60px;">
                {{-- <img src="logo.svg" alt=""> --}}
            </a>
            {{-- search sm --}}
            <div class="d-flex">
                <div id="search-sm">
                    <button id="search-sm-btn" class="btn btn-secondary bg-white border-0 text-dark fs-5"
                        type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                @guest
                @else
                    <a id="cart-link-sm" class="text-decoration-none text-dark fs-4 mx-3" style="margin-top: 3px;"
                        href="{{ route('cart.index') }}">
                        <i class="bi bi-cart3"></i></a>
                @endguest
            </div>
            <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 ms-3"
                            href="{{ route('customer.product.index', ['category' => 'Beer']) }}"><strong>Beer</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-no-caret fs-5 ms-3 text-dark fw-bold" href="#"
                            id="wineDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wine
                        </a>
                        <ul class="dropdown-menu rounded-0 p-0" aria-labelledby="wineDropdown">
                            @foreach ($viewData['wineCategories'] as $item)
                                <li><a class="dropdown-item py-3 ps-4"
                                        href="{{ route('customer.product.index', ['category' => $item->getName()]) }}">{{ $item->getName() }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-no-caret fs-5 ms-3 text-dark fw-bold" href="#"
                            id="vangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vang
                        </a>
                        <ul class="dropdown-menu rounded-0 p-0" aria-labelledby="vangDropdown">
                            @foreach ($viewData['vangCategories'] as $item)
                                <li><a class="dropdown-item py-3 ps-4"
                                        href="{{ route('customer.product.index', ['category' => $item->getName()]) }}">{{ $item->getName() }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 ms-3"
                            href="{{ route('customer.infor.wineinfo') }}"><strong>Infor</strong></a>
                    </li>
                    <li class="mx-5">
                        <div class="input-group">
                            {{-- search --}}
                            <span class="searchIconSpan"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <form action="{{ route('customer.product.index') }}" method="GET">
                                <input type="search" id="searchInput" name="searchInput" onkeyup="showProducts()"
                                    class="" placeholder="Search products..." aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </form>
                            <ul id="myUL">
                                @if ($viewData['products'])
                                    @foreach ($viewData['products'] as $item)
                                        <li class="p-0"><a class="p-2"
                                                href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                                <div class="row">
                                                    <div class="col-3 p-0 ps-4">
                                                        <img class="img-fluid" style="width: 70px;height:90px;"
                                                            src="{{ asset('/storage/' . $item->getImage()) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="mb-3"><strong
                                                                class="nameProducts">{{ $item->getName() }}
                                                            </strong></div>
                                                        <div class="priceProducts">
                                                            ${{ $item->getPrice() }}
                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                        </div>
                    </li>
                    @guest
                        <li id="signin-sm" class="nav-link text-center">
                            <a class="link-layout fs-5 fs-6 mx-3 ps-3 text-danger" href="{{ route('login') }}">Sign
                                in</a>
                        </li>
                    @else
                        {{-- dropdown info user --}}
                        <li id="userinfo-sm" class="dropdown">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->getName() }}
                            </a>
                            <ul class="dropdown-menu rounded-0">
                                <li class="px-3 py-2 text-center">
                                    <p class="m-0">Balance:
                                        <span class="text-danger">${{ auth()->user()->getBalance() }}</span>
                                    </p>
                                </li>
                                @if (auth()->user()->getRole() == 'admin')
                                    <!-- Kiểm tra xem người dùng có vai trò admin hay không -->
                                    <li class="text-center">
                                        <a id="adminLink" class="dropdown-item py-2 "
                                            href="{{ route('admin.home.index') }}">Admin </a>
                                    </li>
                                @endif
                                <li class="text-center">
                                    <a id="addbalanceLink" class="dropdown-item py-2"
                                        href="{{ route('customer.user.add') }}">Add
                                        Balance</a>
                                </li>
                                <li class="text-center">
                                    <a id="myordersLink" class="dropdown-item py-2"
                                        href="{{ route('myaccount.orders') }}">My
                                        Orders</a>
                                </li>
                                <li class="text-center">
                                    <a id="infoLink" class="dropdown-item py-2"
                                        href="{{ route('customer.user.index') }}">Info</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="text-center">
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                        <a id="addbalanceLink" role="button" class="dropdown-item py-2"
                                            onclick="document.getElementById('logout').submit();">
                                            Logout
                                        </a>
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
            @guest
                {{-- search md --}}
                <div id="search-md">
                    <button id="search-md-btn" class="btn btn-secondary bg-white border-0 text-dark fs-5" type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <li id="signin" class="nav-link">
                    <a class="link-layout fs-5 fs-6 me-3 ms-2 text-danger text-nowrap" href="{{ route('login') }}">Sign
                        in</a>
                </li>
            @else
                {{-- search md --}}
                <div id="search-md">
                    <button id="search-md-btn" class="btn btn-secondary bg-white border-0 text-dark fs-5" type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <a id="cart-link-md" class="text-decoration-none text-dark fs-5 mx-3" href="{{ route('cart.index') }}">
                    <i class="bi bi-cart3"></i></a>
                <a id="cart-link" href="{{ route('cart.index') }}">
                    <i class="bi bi-cart3"></i> Cart</a>
                {{-- dropdown info user --}}
                <div id="userinfo" class="dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->getName() }}
                    </a>
                    <ul class="dropdown-menu rounded-0">
                        <li class="px-3 py-2">
                            <p class="m-0">Balance:
                                <span class="text-danger">${{ auth()->user()->getBalance() }}</span>
                            </p>
                        </li>
                        @if (auth()->user()->getRole() == 'admin')
                            <!-- Kiểm tra xem người dùng có vai trò admin hay không -->
                            <a id="adminLink" class="dropdown-item text-start py-2"
                                href="{{ route('admin.home.index') }}">Admin </a>
                        @endif
                        <li>
                            <a id="addbalanceLink" class="dropdown-item text-start py-2"
                                href="{{ route('customer.user.add') }}">Add
                                Balance</a>
                        </li>
                        <li>
                            <a id="myordersLink" class="dropdown-item text-start py-2"
                                href="{{ route('myaccount.orders') }}">My
                                Orders</a>
                        </li>
                        <li>
                            <a id="infoLink" class="dropdown-item text-start py-2"
                                href="{{ route('customer.user.index') }}">Info</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="p-0">
                            <form id="logout" action="{{ route('logout') }}" method="POST">
                                <a id="addbalanceLink" role="button" class="dropdown-item  text-start py-2"
                                    onclick="document.getElementById('logout').submit();">
                                    Logout
                                </a>
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </nav>
        {{-- ul search md --}}
        <ul id="search-md-ul">
            <li id="search-md-li">
                <form action="{{ route('customer.product.index') }}" method="GET">
                    <input type="search" id="searchInput-md" name="searchInput" class="form-control"
                        placeholder="Search products..." aria-label="search" aria-describedby="basic-addon1">
                </form>
            </li>
            <li>
                {{-- myul-md --}}
                <ul id="myUL-md">
                    @if ($viewData['products'])
                        @foreach ($viewData['products'] as $item)
                            <li class="p-0"><a class="p-2"
                                    href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                    <div class="row">
                                        <div class="col-3 col-md-2 p-0 ps-4">
                                            <img class="img-fluid" style="width: 70px;height:90px;"
                                                src="{{ asset('/storage/' . $item->getImage()) }}" alt="">
                                        </div>
                                        <div class="col col-md ps-3">
                                            <div class="mb-3"><strong class="nameProducts">{{ $item->getName() }}
                                                </strong></div>
                                            <div class="priceProducts">
                                                ${{ $item->getPrice() }}
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>
        </ul>
        {{-- ul search sm --}}
        <ul id="search-sm-ul">
            <li id="search-sm-li">
                <form action="{{ route('customer.product.index') }}" method="GET">
                    <input type="search" id="searchInput-sm" name="searchInput" class="form-control"
                        placeholder="Search products..." aria-label="search" aria-describedby="basic-addon1">
                </form>
            </li>
            {{-- myul-sm --}}
            <li>
                <ul id="myUL-sm">
                    @if ($viewData['products'])
                        @foreach ($viewData['products'] as $item)
                            <li class="p-0"><a class="p-2"
                                    href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                    <div class="row">
                                        <div class="col-3 col-md-2 p-0 ps-4">
                                            <img class="img-fluid" style="width: 70px;height:90px;"
                                                src="{{ asset('/storage/' . $item->getImage()) }}" alt="">
                                        </div>
                                        <div class="col col-md ps-3">
                                            <div class="mb-3"><strong class="nameProducts">{{ $item->getName() }}
                                                </strong></div>
                                            <div class="priceProducts">
                                                ${{ $item->getPrice() }}
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>
        </ul>


    </header>


    @yield('content')

    <footer class="custom-bg-color-2 py-0 my-0 my-element">
        <div class="container col-9 py-5 ps-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 ps-5 mb-3">
                    <p class="fs-3 mb-4"><strong>Follow us</strong></p>
                    <div class="my-3">
                        <button class="social border-0 px-2 me-2">
                            <i class="fa-brands fa-dribbble text-white fs-4 my-2 "></i>
                        </button>
                        <button class="social border-0 me-2">
                            <i class="fa-brands fa-facebook fs-4 text-white my-2 mx-1"></i>
                        </button>
                        <button class="social border-0 me-2">
                            <i class="fa-brands fa-google-plus-g text-white fs-4 my-2"></i>
                        </button>
                        <button class="social border-0 me-2">
                            <i class="fa-brands fa-linkedin fs-4 text-white my-2 mx-1"></i>
                        </button>
                        <button class="social border-0 me-2">
                            <i class="fa-brands fa-twitter fs-4 text-white my-2 mx-1"></i>
                        </button>
                    </div>
                    {{-- Credit --}}
                    <p class="fs-3 mb-4"><strong>Payment options</strong></p>
                    <button class="bg-beige border-0 px-1 me-2">
                        <img src="{{ asset('image/paypal.png') }}" alt="paypal">
                    </button>
                    <button class="bg-beige border-0 px-1 me-2">
                        <img src="{{ asset('image/visa.png') }}" alt="visa">
                    </button>
                    <button class="bg-beige border-0 px-1 me-2">
                        <img src="{{ asset('image/mastercard.png') }}" alt="mastercard">
                    </button>
                    <button class="bg-beige border-0 px-1 me-2">
                        <img src="{{ asset('image/cirrus.png') }}" alt="cirrus">
                    </button>

                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 ps-5 mb-3">
                    <p class="mb-4 custom-font fs-3 ">
                        <strong>Abouts</strong>
                    </p>
                    <div class="pb-2">
                        <a class="text-decoration-none text-dark" href="{{ route('customer.infor.howwework') }}">How
                            We Works</a>
                    </div>
                    <div class="py-2">
                        <a class="text-decoration-none text-dark" href="{{ route('customer.infor.aboutus') }}">About
                            Us</a>
                    </div>
                    <div class="py-2">
                        <a class="text-decoration-none text-dark"
                            href="{{ route('customer.infor.careers') }}">Careers</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 ps-5 mb-3">
                    <p class="mb-4 custom-font fs-3">
                        <strong>Partner with us</strong>
                    </p>
                    <div class="pb-2">
                        <a class="text-decoration-none text-dark" href="{{ route('customer.infor.business') }}">For
                            Business</a>
                    </div>
                    <div class="py-2">
                        <a class="text-decoration-none text-dark" href="{{ route('customer.infor.data') }}">Data</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="/fontawesome-free-6.4.2-web/js/all.min.js"></script>
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

        // clear btn input
        const input = document.getElementById('searchInput');
        const clearButton = document.getElementById('clearBtn');
        const ulProducts = document.getElementById('myUL');

        // showProducts
        document.getElementById("searchInput").addEventListener("input", function() {
            var input, filter, ul, li, a, i;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Kiểm tra nếu input có giá trị thì hiển thị danh sách, ngược lại ẩn đi
            if (filter !== "") {
                ul.style.display = "block";
            } else {
                ul.style.display = "none";
            }

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        })

        // seach md dropdown product
        document.getElementById("searchInput-md").addEventListener("input", function() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("searchInput-md");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL-md");
            li = ul.getElementsByTagName('li');

            // Kiểm tra nếu input có giá trị thì hiển thị danh sách, ngược lại ẩn đi
            if (filter !== "") {
                ul.style.display = "block";
            } else {
                ul.style.display = "none";
            }

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        })

        // search-md click
        const searchmdbtn = document.getElementById("search-md-btn");
        const searchmdul = document.getElementById("search-md-ul");
        searchmdbtn.addEventListener("click", function() {
            searchmdul.classList.toggle("active");
        });

        // seach sm dropdown product
        document.getElementById("searchInput-sm").addEventListener("input", function() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("searchInput-sm");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL-sm");
            li = ul.getElementsByTagName('li');

            // Kiểm tra nếu input có giá trị thì hiển thị danh sách, ngược lại ẩn đi
            if (filter !== "") {
                ul.style.display = "block";
            } else {
                ul.style.display = "none";
            }

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        })

        // search-sm click
        const searchsmbtn = document.getElementById("search-sm-btn");
        const searchsmul = document.getElementById("search-sm-ul");
        searchsmbtn.addEventListener("click", function() {
            searchsmul.classList.toggle("active");
        });
    </script>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
