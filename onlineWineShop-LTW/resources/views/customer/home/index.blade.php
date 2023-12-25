@extends('layout.app')
@section('content')
    <section class="bg-blue">
        <div class="container text-center py-3">
            <h4><strong>Life Is Short, Buy Good Wine</strong></h4>
            <p class="mb-0 fs-6">Drinks for every moment</p>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Best Sellers</h3>
                </div>
                <div class="col text-end">
                    <a class="text-decoration-none bg-white text-danger"
                        href="{{ route('customer.product.index', ['bestsellers' => 'bestsellers']) }}"><strong>View
                            All</strong></a>
                </div>
            </div>
            <div class="row px-4 py-3" id="product-row">
                @php
                    $count = 0;
                @endphp
                @foreach ($viewData['best_sellers'] as $item)
                    @if ($count < 6)
                        <div class="col-1 col-sm-2 col-md-4 col-lg-2">
                            <a class="text-decoration-none"
                                href="{{ route('customer.product.detail', ['id' => $item->id]) }}">
                                <div class="card rounded-4">
                                    <span id="tag" class="rounded-end-4">Best
                                        Seller</span>
                                    <img class="img-fluid mt-0" style="width: 77%;height:180px; margin-left:23px;"
                                        src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                    <div class="card-body">
                                        {{-- rating --}}
                                        @php
                                            $currentRating = 0;
                                            $totalReviews = 0;
                                        @endphp
                                        @foreach ($viewData['ratings'] as $rating)
                                            @if ($item->getId() == $rating->getId())
                                                @php $currentRating = $rating->rating @endphp
                                            @endif
                                        @endforeach

                                        @foreach ($viewData['total_rating'] as $total)
                                            @if ($item->getId() == $total->getId())
                                                @php $totalReviews = $total->total @endphp
                                            @endif
                                        @endforeach
                                        <p>
                                            <span class="m-0 mb-1">
                                                <span class="fa fa-star fs-6" style="color: #676200;"></span>
                                                {{ $currentRating }}
                                            </span>
                                            <span style="font-size: 13px;">
                                                ({{ $totalReviews }} reviews)
                                            </span>
                                        </p>
                                        <h6 class="card-title mb-0 fs-7 mb-2"
                                            style="max-height: 2.5em; height:2.5em; overflow: hidden; text-overflow: ellipsis; ">
                                            <strong>{{ $item->getName('name') }}</strong>
                                        </h6>
                                        <p class="card-text fs-6 text-danger custom-money text-truncate">
                                            <strong>${{ $item->getPrice('price') }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @php $count++; @endphp
                    @endif
                @endforeach

            </div>
        </div>

    </section>

    <section class="bg-1 py-5">
        <div class="container text-center">
            <h2><strong>Your one-stop beverage shop</strong></h2>
            <div class="row mt-5">
                <div class="col-lg-4 col-sm-12 col-12 text-center px-4">
                    <img class="img-fluid blend-image" style="width:150px;"
                        src="{{ asset('/image/address-how-to-icon.png') }}" alt="Image" loading="lazy">
                    <h5 class="my-3"><strong>Enter your address</strong></h5>
                    <p>See what's available for delivery now or later near you. Send a gift or treat yourself.</p>
                </div>

                <div class="col-lg-4 col-sm-12 col-12 text-center px-4">
                    <img class="img-fluid blend-image" style="width:150px;"
                        src="{{ asset('/image/drinks-how-to-icon.png') }}" alt="Image" loading="lazy">
                    <h5 class="my-3"><strong>Shop deals and thousands of drinks</strong></h5>
                    <p>Compare prices on your favorites, soon-to-be favorites, and the rare stuff, too. Even *that* one.</p>
                </div>

                <div class="col-lg-4 col-sm-12 col-12 text-center px-4">
                    <img class="img-fluid blend-image" style="width:150px;"
                        src="{{ asset('/image/delivery-how-to-icon.png') }}" alt="Image" loading="lazy">
                    <h5 class="my-3"><strong>Sit back and relax</strong></h5>
                    <p>Stay in the moment with beer, wine, and spirits delivered. It's not magic, but it's close.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            {{-- carousel --}}
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/image/advertisement-1.png') }}" class="d-block w-100" alt="advertisement">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/image/advertisement-2.png') }}" class="d-block w-100" alt="advertisement">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/image/advertisement-3.png') }}" class="d-block w-100" alt="advertisement">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="pb-3">
        <div class="container custom-border-top-1 pt-3">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Whiskey</h3>
                </div>
                <div class="col text-end">
                    <a class="text-decoration-none bg-white text-danger"
                        href="{{ route('customer.product.index', ['category' => 'Whiskey']) }}"><strong>View
                            All</strong></a>
                </div>
            </div>
            <div class="row px-4 py-3" id="product-row">
                @php $countw = 0; @endphp
                @foreach ($viewData['whiskey'] as $item)
                    @if ($countw < 6)
                        <div class="col-1 col-sm-2 col-md-4 col-lg-2" id="home-products">
                            <a class="text-decoration-none"
                                href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                <div class="card rounded-4">
                                    @php
                                        $count = 0;
                                        $countBest = 0;
                                        $currentRating = 0;
                                        $totalReviews = 0;
                                    @endphp
                                    @foreach ($viewData['best_sellers'] as $pro)
                                        @if ($item->getId() == $pro->getId() && $count < 6)
                                            <span id="tag" class="rounded-end-4">Best
                                                Seller</span>
                                            @php $countBest ++ @endphp
                                        @endif
                                        @php $count++ @endphp
                                    @endforeach
                                    @if ($countBest == 0)
                                        <span id="untag" class="rounded-end-4"></span>
                                    @endif
                                    <img class="img-fluid mt-0" style="width: 77%;height:180px; margin-left:23px;"
                                        src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                    <div class="card-body">
                                        {{-- rating --}}

                                        @foreach ($viewData['ratings'] as $rating)
                                            @if ($item->getid() == $rating->getId())
                                                @php $currentRating = $rating->rating @endphp
                                            @endif
                                        @endforeach

                                        @foreach ($viewData['total_rating'] as $total)
                                            @if ($item->getid() == $total->getId())
                                                @php $totalReviews = $total->total @endphp
                                            @endif
                                        @endforeach

                                        <p class="m-0 mb-1" style="display: inline-block;">
                                            <span class="fa fa-star fs-6" style="color: #676200;"></span>
                                            {{ $currentRating }}
                                        </p>
                                        <span style="font-size: 13px;">
                                            ({{ $totalReviews }} reviews)
                                        </span>
                                        <h6 class="card-title mb-0 fs-7 mb-2"
                                            style="max-height: 2.5em; height:2.5em; overflow: hidden; text-overflow: ellipsis; ">
                                            <strong>{{ $item->getName('name') }}</strong>
                                        </h6>
                                        <p class="card-text fs-6 text-danger custom-money text-truncate">
                                            <strong>${{ $item->getPrice('price') }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @php $count++; @endphp
                    @endif
                @endforeach

            </div>
        </div>

    </section>

    <section class="pb-3">
        <div class="container custom-border-top-1 pt-3">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Vodka</h3>
                </div>
                <div class="col text-end">
                    <a class="text-decoration-none bg-white text-danger"
                        href="{{ route('customer.product.index', ['category' => 'Vodka']) }}"><strong>View
                            All</strong></a>
                </div>
            </div>
            <div class="row px-4 py-3" id="product-row">
                @php $countv = 0; @endphp
                @foreach ($viewData['vodka'] as $item)
                    @if ($countv < 6)
                        <div class="col-1 col-sm-2 col-md-4 col-lg-2">
                            <a class="text-decoration-none"
                                href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                <div class="card rounded-4">
                                    @php
                                        $count = 0;
                                        $countBest = 0;
                                        $currentRating = 0;
                                        $totalReviews = 0;
                                    @endphp
                                    @foreach ($viewData['best_sellers'] as $pro)
                                        @if ($item->getId() == $pro->getId() && $count < 6)
                                            <span id="tag" class="rounded-end-4">Best
                                                Seller</span>
                                            @php $countBest ++ @endphp
                                        @endif
                                        @php $count++ @endphp
                                    @endforeach
                                    @if ($countBest == 0)
                                        <span id="untag" class="rounded-end-4"></span>
                                    @endif
                                    <img class="img-fluid mt-0" style="width: 77%;height:180px; margin-left:23px;"
                                        src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                    <div class="card-body">
                                        {{-- rating --}}

                                        @foreach ($viewData['ratings'] as $rating)
                                            @if ($item->getid() == $rating->getId())
                                                @php $currentRating = $rating->rating @endphp
                                            @endif
                                        @endforeach

                                        @foreach ($viewData['total_rating'] as $total)
                                            @if ($item->getid() == $total->getId())
                                                @php $totalReviews = $total->total @endphp
                                            @endif
                                        @endforeach

                                        <p class="m-0 mb-1" style="display: inline-block;">
                                            <span class="fa fa-star fs-6" style="color: #676200;"></span>
                                            {{ $currentRating }}
                                        </p>
                                        <span style="font-size: 13px;">
                                            ({{ $totalReviews }} reviews)
                                        </span>
                                        <h6 class="card-title mb-0 fs-7 mb-2"
                                            style="max-height: 2.5em; height:2.5em; overflow: hidden; text-overflow: ellipsis; ">
                                            <strong>{{ $item->getName('name') }}</strong>
                                        </h6>
                                        <p class="card-text fs-6 text-danger custom-money text-truncate">
                                            <strong>${{ $item->getPrice('price') }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @php $count++; @endphp
                    @endif
                @endforeach

            </div>
        </div>

    </section>

    <section class="pb-3">
        <div class="container custom-border-top-1 pt-3">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Tequila</h3>
                </div>
                <div class="col text-end">
                    <a class="text-decoration-none bg-white text-danger"
                        href="{{ route('customer.product.index', ['category' => 'Tequila']) }}"><strong>View
                            All</strong></a>
                </div>
            </div>
            <div class="row px-4 py-3" id="product-row">
                @php $countt = 0; @endphp
                @foreach ($viewData['tequila'] as $item)
                    @if ($countt < 6)
                        <div class="col-1 col-sm-2 col-md-4 col-lg-2">
                            <a class="text-decoration-none"
                                href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                <div class="card rounded-4">
                                    @php
                                        $count = 0;
                                        $countBest = 0;
                                        $currentRating = 0;
                                        $totalReviews = 0;
                                    @endphp
                                    @foreach ($viewData['best_sellers'] as $pro)
                                        @if ($item->getId() == $pro->getId() && $count < 6)
                                            <span id="tag" class="rounded-end-4">Best
                                                Seller</span>
                                            @php $countBest ++ @endphp
                                        @endif
                                        @php $count++ @endphp
                                    @endforeach
                                    @if ($countBest == 0)
                                        <span id="untag" class="rounded-end-4"></span>
                                    @endif
                                    <img class="img-fluid mt-0" style="width: 77%;height:180px; margin-left:23px;"
                                        src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                    <div class="card-body">
                                        {{-- rating --}}

                                        @foreach ($viewData['ratings'] as $rating)
                                            @if ($item->getid() == $rating->getId())
                                                @php $currentRating = $rating->rating @endphp
                                            @endif
                                        @endforeach

                                        @foreach ($viewData['total_rating'] as $total)
                                            @if ($item->getid() == $total->getId())
                                                @php $totalReviews = $total->total @endphp
                                            @endif
                                        @endforeach

                                        <p class="m-0 mb-1" style="display: inline-block;">
                                            <span class="fa fa-star fs-6" style="color: #676200;"></span>
                                            {{ $currentRating }}
                                        </p>
                                        <span style="font-size: 13px;">
                                            ({{ $totalReviews }} reviews)
                                        </span>
                                        <h6 class="card-title mb-0 fs-7 mb-2"
                                            style="max-height: 2.5em; height:2.5em; overflow: hidden; text-overflow: ellipsis; ">
                                            <strong>{{ $item->getName('name') }}</strong>
                                        </h6>
                                        <p class="card-text fs-6 text-danger custom-money text-truncate">
                                            <strong>${{ $item->getPrice('price') }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @php $count++; @endphp
                    @endif
                @endforeach

            </div>
        </div>

    </section>

    <section class="pb-3">
        <div class="container custom-border-top-1 pt-3">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Red Wine</h3>
                </div>
                <div class="col text-end">
                    <a class="text-decoration-none bg-white text-danger"
                        href="{{ route('customer.product.index', ['category' => 'Red Wine']) }}"><strong>View
                            All</strong></a>
                </div>
            </div>
            <div class="row px-4 py-3" id="product-row">
                @php $countr = 0; @endphp
                @foreach ($viewData['redwine'] as $item)
                    @if ($countr < 6)
                        <div class="col-1 col-sm-2 col-md-4 col-lg-2">
                            <a class="text-decoration-none"
                                href="{{ route('customer.product.detail', ['id' => $item->getId()]) }}">
                                <div class="card rounded-4">
                                    @php
                                        $count = 0;
                                        $countBest = 0;
                                        $currentRating = 0;
                                        $totalReviews = 0;
                                    @endphp
                                    @foreach ($viewData['best_sellers'] as $pro)
                                        @if ($item->getId() == $pro->getId() && $count < 6)
                                            <span id="tag" class="rounded-end-4">Best
                                                Seller</span>
                                            @php $countBest ++ @endphp
                                        @endif
                                        @php $count++ @endphp
                                    @endforeach
                                    @if ($countBest == 0)
                                        <span id="untag" class="rounded-end-4"></span>
                                    @endif
                                    <img class="img-fluid mt-0" style="width: 77%;height:180px; margin-left:23px;"
                                        src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                    <div class="card-body">
                                        {{-- rating --}}

                                        @foreach ($viewData['ratings'] as $rating)
                                            @if ($item->getid() == $rating->getId())
                                                @php $currentRating = $rating->rating @endphp
                                            @endif
                                        @endforeach

                                        @foreach ($viewData['total_rating'] as $total)
                                            @if ($item->getid() == $total->getId())
                                                @php $totalReviews = $total->total @endphp
                                            @endif
                                        @endforeach

                                        <p class="m-0 mb-1" style="display: inline-block;">
                                            <span class="fa fa-star fs-6" style="color: #676200;"></span>
                                            {{ $currentRating }}
                                        </p>
                                        <span style="font-size: 13px;">
                                            ({{ $totalReviews }} reviews)
                                        </span>
                                        <h6 class="card-title mb-0 fs-7 mb-2"
                                            style="max-height: 2.5em; height:2.5em; overflow: hidden; text-overflow: ellipsis; ">
                                            <strong>{{ $item->getName('name') }}</strong>
                                        </h6>
                                        <p class="card-text fs-6 text-danger custom-money text-truncate">
                                            <strong>${{ $item->getPrice('price') }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @php $count++; @endphp
                    @endif
                @endforeach

            </div>
        </div>

    </section>
@endsection
