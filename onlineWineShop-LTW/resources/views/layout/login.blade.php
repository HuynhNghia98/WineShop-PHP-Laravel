<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    {{-- font-awesome --}}
    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/all.min.css">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Varela+Round&display=swap"
        rel="stylesheet">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>@yield('title', 'Online Wine Store')</title>

</head>

<body>
    <section class="border-bottom border-top">
        <div class="container text-center">
            <a href="{{ route('customer.home.index') }}">
                <img class="img-fluid" id="logoId" src="/image/logoWeb.png" alt="Logo Image">
            </a>

        </div>
    </section>
    @yield('loginContent')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
