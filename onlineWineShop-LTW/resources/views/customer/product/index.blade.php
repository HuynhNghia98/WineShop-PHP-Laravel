@extends('layout.app')
@section('content')
    <section>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 rounded-0 px-5 py-3 bg-white">
                    {{-- form bo loc --}}
                    <form action="" id="filter_form" method="GET">
                        @csrf
                        <div class="pb-3" style="border-bottom: 1px solid black;">
                            <div class="row">
                                <div class="col">
                                    <h4>
                                        <strong class="">Category</strong>
                                    </h4>
                                </div>
                                <div class="col text-end d-block d-md-none">
                                    <button class="btn btn-dark ms-4 mb-2" style="padding: 0.5px 5px;" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-solid fa-plus text-white fs-7"></i>
                                    </button>
                                </div>
                            </div>
                            {{-- div sm --}}
                            <div class="d-block d-md-none">
                                <div class="collapse" id="collapseExample">
                                    <div class="row ps-4 py-1">
                                        <div class="form-check">
                                            <input id="allproduct"
                                                class="form-check-input category_filter fs-5 rounded-1 custom-radio {{ Request::get('category_filter') === 0 ? 'text-danger bg-danger border-danger' : '' }}"
                                                data-filters="category" type="radio"
                                                {{ !Request::has('category_filter') ? (!Request::has('bestsellers') ? 'checked' : '') : (Request::input('category_filter') === 0 ? 'checked' : '') }}
                                                value="0" name="category_filter" id="category_filter">
                                            <label for="allproduct" class="form-check-label ms-2 fs-6"
                                                style="padding-top: 2px;">All
                                                Products</label>
                                        </div>
                                    </div>
                                    @foreach ($viewData['categories'] as $item)
                                        <div class="row ps-4 py-1">
                                            <div class="form-check">
                                                <input id="{{ $item->getId() }}"
                                                    class="form-check-input category_filter fs-5 rounded-1 custom-radio {{ Request::get('category_filter') == $item->getId() ? 'text-danger bg-danger border-danger' : '' }}"
                                                    data-filters="category" type="radio"
                                                    {{ Request::get('category_filter') === $item->getId() || Request::get('category') == $item->getName() ? 'checked' : '' }}
                                                    value="{{ $item->getId() }}" name="category_filter"
                                                    id="category_filter">
                                                <label for="{{ $item->getId() }}" class="form-check-label ms-2 fs-6"
                                                    style="padding-top: 2px;">{{ $item->getName() }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- div md --}}
                            <div class="d-none d-md-block">
                                <div class="row ps-4 py-1">
                                    <div class="form-check">
                                        <input id="allproduct"
                                            class="form-check-input category_filter fs-5 rounded-1 custom-radio {{ Request::get('category_filter') === 0 ? 'text-danger bg-danger border-danger' : '' }}"
                                            data-filters="category" type="radio"
                                            {{ !Request::has('category_filter') ? (!Request::has('bestsellers') ? 'checked' : '') : (Request::input('category_filter') == 0 ? 'checked' : '') }}
                                            value="0" name="category_filter" id="category_filter">
                                        <label for="allproduct" class="form-check-label ms-2 fs-6"
                                            style="padding-top: 2px;">All
                                            Products</label>
                                    </div>
                                </div>
                                @foreach ($viewData['categories'] as $item)
                                    <div class="row ps-4 py-1">
                                        <div class="form-check">
                                            <input id="{{ $item->getId() }}"
                                                class="form-check-input category_filter fs-5 rounded-1 custom-radio {{ Request::get('category_filter') == $item->getId() ? 'text-danger bg-danger border-danger' : '' }}"
                                                data-filters="category" type="radio"
                                                {{ Request::get('category_filter') == $item->getId() || Request::get('category') == $item->getName() ? 'checked' : '' }}
                                                value="{{ $item->getId() }}" name="category_filter" id="category_filter">
                                            <label for="{{ $item->getId() }}" class="form-check-label ms-2 fs-6"
                                                style="padding-top: 2px;">{{ $item->getName() }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <h4 class="my-3 pt-2 pb-3" style="border-bottom: 1px solid black;"><strong>Sort</strong></h4>
                        <select name="sort" id="sort" class="form-control">
                            <option
                                {{ Request::get('sort') == 'default' || !Request::get('sort') ? "selected='selected'" : '' }}
                                value="default" selected>
                                --Default--</option>

                            <option {{ Request::get('sort') == 'asc' ? "selected='selected'" : '' }} value="asc">Price:
                                Low
                                to
                                High
                            </option>
                            <option {{ Request::get('sort') == 'desc' ? "selected='selected'" : '' }} value="desc">
                                Price: High to
                                Low
                            </option>
                            <option {{ Request::get('sort') == 'az' ? "selected='selected'" : '' }} value="az">Name: A
                                - Z
                            </option>
                            <option {{ Request::get('sort') == 'za' ? "selected='selected'" : '' }} value="za">Name: Z
                                - A
                            </option>
                        </select>
                    </form>

                </div>
                <div class="col-12 col-md-7 col-sm-12 col-lg-8 bg-white">
                    <div class="py-3">
                        <p class="text-danger"><strong>There are {{ $viewData['products']->count() }} products</strong>
                        </p>
                        <div class="row g-4 mx-0 mx-sm-4 mx-md-0">
                            @foreach ($viewData['products'] as $item)
                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-lg-3 custom-product">
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
                                                @if ($item->getId() == $pro->getId() && $count < 10)
                                                    <span id="tag" class="rounded-end-4">Best
                                                        Seller</span>
                                                    @php $countBest++ @endphp
                                                @endif
                                                @php $count++ @endphp
                                            @endforeach
                                            @if ($countBest == 0)
                                                <span id="untag" class="rounded-end-4"></span>
                                            @endif
                                            <img class="img-fluid mt-0" style="width: 65%;height:130px;margin-left:32px;"
                                                src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                            <div class="card-body">
                                                {{-- rating --}}
                                                @foreach ($viewData['ratings'] as $rating)
                                                    @if ($item->getid() == $rating->getId())
                                                        @php $currentRating = $rating->vote @endphp
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

                                                <h6 class="card-title mb-0"
                                                    style="max-height: 2.5em; height:2.5em; overflow: hidden; text-overflow: ellipsis; font-size:13px">
                                                    <strong>{{ $item->getName('name') }}</strong>
                                                </h6>

                                                <p class="card-text fs-6 text-danger custom-money text-truncate">
                                                    <strong>${{ $item->getPrice('price') }}</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const categoryRadios = document.querySelectorAll('.category_filter');
            const sortSelect = document.getElementById('sort');
            const filter_form = document.getElementById('filter_form');

            categoryRadios.forEach(radio => {
                radio.addEventListener('change', sendForm);
            });

            sortSelect.addEventListener('change', sendForm);

            function sendForm() {
                filter_form.submit();
            }
        });
    </script>
@endsection
