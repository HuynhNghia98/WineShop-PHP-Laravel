@extends('layout.app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="">
                <a id="detaillink" href="{{ route('customer.home.index') }}">Home</a> /
                <a id="detaillink"
                    href="{{ route('customer.product.index', ['category' => $viewData['product']->getCategory()->getName()]) }}">{{ $viewData['product']->getCategory()->getName() }}</a>
                /
                <a id="detaillink" href="">{{ $viewData['product']->getName() }}</a>
            </div>
            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-lg-3 px-0 text-center text-lg-start mb-4 mb-md-0">
                    <img class="img-fluid" style="height: 400px;"
                        src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" alt="Image">
                </div>
                <div class="col-12 col-sm-12 col-lg px-5 px-lg-0">
                    <div class="">
                        <div class="fs-2"><strong>{{ $viewData['product']->getName() }}</strong></div>
                    </div>
                    <div style="margin: 8px 0 20px 0">
                        {{-- hien thi best seller --}}
                        @foreach ($viewData['best_sellers'] as $best_seller)
                            @if ($best_seller->getId() == $viewData['product']->getId())
                                <span class="rounded-1 fs-7"
                                    style="background-color: #F7E7CE;; padding:13px 15px;"><strong>Best
                                        Seller</strong></span>
                            @endif
                        @endforeach
                    </div>
                    <div class="text-red my-2">
                        <div class="fs-1" style="display: inline-block">${{ $viewData['product']->getPrice() }}</div>
                    </div>
                    {{-- rating star --}}
                    <div class="rating mb-3" style="display:inline-block">
                        @php
                            $avgRating = $viewData['avg_rating'];
                            $integerPart = floor($avgRating);
                            $hasHalfStar = $avgRating % 1 !== 0;
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $integerPart)
                                <span class="fa fa-star fs-5" style="color: #FFD700;"></span>
                            @else
                                @if ($hasHalfStar && $i == $integerPart + 1)
                                    <span class="fa fa-star-half-o fs-5" style="color: #FFD700;"></span>
                                @else
                                    <span class="fa fa-star fs-5" style="color: #ccc;"></span>
                                @endif
                            @endif
                        @endfor
                    </div>
                    <span class="ms-3 me-1">
                        <strong class="fs-3">
                            {{ $viewData['avg_rating'] }}
                        </strong>
                    </span>
                    <span style="color: #9a9a9a">
                        ({{ $viewData['total_review'] }}
                        Reviews)
                    </span>


                    <div class="mb-2">
                        {{ $viewData['product']->getCategory()->getName() }} <span class="text-red">/</span>
                        {{ $viewData['product']->getAbv() }}%
                        <span class="text-red">/</span>
                        {{ $viewData['product']->getRegion() }}
                    </div>

                    @if (auth()->user())
                        <form method="POST" action="{{ route('cart.add', ['id' => $viewData['product']['id']]) }}">
                            <div class="row">
                                <div class="col-6 col-lg-3 custom-border-top-1 pt-4">
                                    @csrf
                                    <div class="form-floating">
                                        <input id="quantityBuy" min="1" value="1" type="number"
                                            class="form-control" name="quantity">
                                        <label for="quantityBuy" class="">Quantity</label>
                                    </div>
                                    @if ($errors->has('error'))
                                        <div class="text-danger">{{ $errors->first('error') }}</div>
                                    @endif
                                </div>
                                <div class="col-6 col-lg-2 custom-border-top-1 pt-4 px-0">
                                    <button id="adtocartBtn" class="btn btn-primary text-white" type="submit">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="row">
                            <div class="col-8 col-lg-4 pt-3">
                                <a id="addtocartLink" href="{{ route('login') }}" class="btn text-white py-3">
                                    <strong>Add to Cart</strong>
                                </a>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-8 col-lg-4 pt-3">
                            <a href="{{ route('customer.product.index') }}" class="btn btn-outline-dark"
                                style="width: 100%"><strong>Back to Product Page</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-bottom my-3 py-5 px-5 px-sm-0">
                <h3><strong>Product Details</strong></h3>
                <div class="row mt-4">
                    <div class="col-4 col md-4 col-lg-1 fs-6 custom-border-top-1 bg-prey py-3 px-3">
                        <strong>Category:</strong>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 fs-6 custom-border-top-1 py-3 px-3">
                        {{ $viewData['product']->getCategory()->getName() }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col md-4 col-lg-1 fs-6 custom-border-top-1 bg-prey py-3 px-3">
                        <strong>Quantity:</strong>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 fs-6 custom-border-top-1 py-3 px-3">
                        {{ $viewData['product']->getQuantity() }}</div>
                </div>
                <div class="row">
                    <div class="col-4 col md-4 col-lg-1 fs-6 custom-border-top-1 bg-prey py-3 px-3"><strong>Region:</strong>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 fs-6 custom-border-top-1 py-3 px-3">
                        {{ $viewData['product']->getRegion() }}</div>
                </div>
                <div class="row">
                    <div class="col-4 col md-4 col-lg-1 fs-6 custom-border-top-1 bg-prey py-3 px-3"><strong>ABV:</strong>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 fs-6 custom-border-top-1 py-3 px-3">
                        {{ $viewData['product']->getAbv() }}%</div>
                </div>
            </div>

            <div class="border-bottom my-3 py-3 px-5 px-sm-0">
                <h3 class="mt-3"><strong>Product Description</strong></h3>
                <div class="fs-6 mt-3 mb-3">{{ $viewData['product']->getDescription() }}</div>
            </div>

            <div class="border-bottom my-3 py-3 px-5 px-sm-0">
                <h3 class="mt-3"><strong>Category Description</strong></h3>
                <div class="fs-6 mt-3 mb-3">{{ $viewData['product']->getCategory()->getDescription() }}</div>
                <div class="fs-6 mt-3 mb-3"></div>
            </div>

            <section class=" border-bottom pb-4">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <h3 class="fw-bold">{{ $viewData['product']->getCategory()->getName() }}</h3>
                        </div>
                        <div class="col text-end">
                            <a class="text-decoration-none bg-white text-danger"
                                href="{{ route('customer.product.index', ['category' => 'Red Wine']) }}"><strong>View
                                    All</strong></a>
                        </div>
                    </div>
                    <div class="row px-4 py-3" id="product-row">
                        @php $countr = 0; @endphp
                        @foreach ($viewData['products'] as $item)
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

                                                @foreach ($viewData['total_ratings'] as $total)
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

            <div class="border-bottom mb-3 py-3 px-5 px-sm-0">
                <h3 class="mt-3"><strong>Community reviews</strong></h3>
                <div class="rating mb-3" style="display:inline-block">
                    @php
                        $avgRating = $viewData['avg_rating'];
                        $integerPart = floor($avgRating);
                        $hasHalfStar = $avgRating % 1 !== 0;
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $integerPart)
                            <span class="fa fa-star fs-5" style="color: #FFD700;"></span>
                        @else
                            @if ($hasHalfStar && $i == $integerPart + 1)
                                <span class="fa fa-star-half-o fs-5" style="color: #FFD700;"></span>
                            @else
                                <span class="fa fa-star fs-5" style="color: #ccc;"></span>
                            @endif
                        @endif
                    @endfor
                </div>
                <span class="ms-3 me-1">
                    <strong class="fs-3">
                        {{ $viewData['avg_rating'] }}
                    </strong>
                </span>
                <span style="color: #9a9a9a">
                    ({{ $viewData['total_review'] }}
                    Reviews)
                </span>
                {{-- collapse write review --}}
                <div class="mb-3">
                    <p class="d-inline-flex gap-1">
                        @if (auth()->user())
                            <a class="btn btn-danger px-4 py-3" data-bs-toggle="collapse" href="#collapseExample"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                <strong>Write Review</strong>
                            </a>
                        @else
                            <a class="btn btn-danger px-4 py-3" href="{{ route('login') }}" role="button">
                                <strong>Write Review</strong>
                            </a>
                        @endif

                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body rounded-0">
                            <form id="review_form" name="review_form"
                                action="{{ route('customer.product.detail', ['id' => $viewData['product']->getId()]) }}"
                                method="post">
                                @csrf
                                <h4><strong>Write a review</strong></h4>
                                <div id="rating" style="float:left" class="">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                </div>
                                @error('rating')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-floating mt-5 pt-4">
                                    <textarea class="form-control" required placeholder="Leave a comment here" id="floatingTextarea"
                                        style="height:150px;" name="review"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                                @if (auth()->user())
                                    <div class="form-floating my-4">
                                        <input type="name" class="form-control" id="floatingInput"
                                            value="{{ auth()->user()->getName() }}" disabled required>
                                        <label id="labelDisableName" for="floatingInput">Name</label>
                                    </div>
                                    <div class="form-floating my-4">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" required
                                            value="{{ auth()->user()->getEmail() }}" disabled>
                                        <label id="labelDisableEmail" for="floatingInput">Email address</label>
                                    </div>
                                @else
                                    <div class="form-floating my-4">
                                        <input type="name" class="form-control" id="floatingInput" value="">
                                        <label id="" for="floatingInput">Name</label>
                                        @error('name')
                                            <p class="alert alert text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-floating my-4">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" value="">
                                        <label id="" for="floatingInput">Email</label>
                                        @error('email')
                                            <p class="alert alert text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endif

                                <button type="submit" id="submitReview">Submit</button>

                                <button class="btn" id="cancelReview" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Cancel
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- cmt --}}
                @foreach ($viewData['product']->getReviews() as $review)
                    <div class="border-top py-3">
                        <h5><strong>{{ $review->getUser()->getName() }}</strong></h5>
                        <div class="rating py-0 my-0" style="width: 50%">
                            @php
                                $rating = $review->getRating(); // Lấy số đánh giá từ review
                            @endphp

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $rating)
                                    <span class="fa fa-star fs-5" style="color: #FFD700;"></span>
                                @else
                                    <span class="fa fa-star fs-5" style="color: #ccc;"></span>
                                @endif
                            @endfor
                        </div>
                        <p class="fs-7 m-0" style="color: #ccc">Verified Buyer</p>

                        <p class="fs-5 my-2">{{ $review->getReview() }}</p>
                    </div>
                @endforeach
            </div>

        </div>


    </section>
@section('scripts')
    <script>
        function calcRate(r) {
            const floorRating = Math.floor(r); // Lấy phần nguyên của số đánh giá
            const starId = 'star' + floorRating;
            // Kiểm tra xem số đánh giá có phần thập phân không
            if (r % 1 !== 0) {
                starId += 'half';
            }
            // Tìm phần tử input radio tương ứng và đặt checked = true
            const starInput = document.getElementById(starId);
            if (starInput) {
                starInput.checked = true;
            }
        }
    </script>
@endsection
@endsection
