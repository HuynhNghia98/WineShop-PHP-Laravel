@extends('layout.app')
@section('content')
    <style>
        .btn {
            font-size: 20px;
        }

        .ab-block-accordion .ab-accordion-title {
            margin-bottom: 10px;
            background: #f2f2f2;
            padding: 10px 15px;
        }

        .ab-accordion-title>strong {
            font-size: 19px;
            font-weight: 700;
        }

        ;

        @media (max-width: 768px) {
            .more {
                display: none;
            }

            .img-fluid {
                margin-bottom: 0px;
            }
        }
    </style>
    <img src="{{ asset('image/AnhBia.png') }}" alt="Work" class="card-img w-100 d-block">
    <section class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-size: 2rem;font-weight: 700;line-height: 1.3;color: #000;">
                    Leave the work to our Corporate Concierge team</h2>
            </div>
            <div class="col-12 col-md-4 text-center p-5">
                <img src="{{ asset('image/Icon_Shop.png') }}" class="img-fluid">
                <h4><strong>Save time</strong></h4>
                <p>We know coordinating and placing multiple, complicated orders is time-consuming. Get time back in your
                    busy day when we step in to help.</p>
            </div>
            <div class="col-12 col-md-4 text-center p-5">
                <img src="{{ asset('image/Icon_Dashboard.png') }}" class="img-fluid">
                <h4><strong>Stay on budget</strong></h4>
                <p>Tell us what budget you have to work with and we can help you choose a variety of drinks and quantities
                    to stay on budget.</p>
            </div>
            <div class="col-12 col-md-4 text-center p-5">
                <img src="{{ asset('image/Icon_Enjoy.png') }}" class="img-fluid">
                <h4><strong>Get expert recommendations</strong></h4>
                <p>Not sure what your team or clients like to drink? No worries, we will leverage our team of experts and
                    trending data to make top-notch recommendations to fit your needs.</p>
            </div>
        </div>

    </section>
    {{-- Corporate Gifting --}}
    <div class="container-fluid bg-1">
        <div class="container col-10">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-md-5 my-4">
                    <img src="{{ asset('image/b1.png') }}" alt="Whiskey" class="img-fluid w-100">
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 mb-5">
                    <h2><strong>Corporate Gifting</strong></h2> <br>
                    <p> Looking for an easy way to send corporate gifts to clients or employees across the
                        country? Let our corporate concierge team do the work. We are here to help with everything
                        from recommending the perfect bottle for the occasion to placing all of the orders for
                        you.</p>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Corporate Events --}}
    <div class="container-fluid">
        <div class="container col-10">
            <div class="row" id="contentRow">
                <div class="col-sm-12 col-md-6 my-md-5 mb-5 p-3" id="textCol">
                    <h3><strong>Corporate Events</strong></h3> <br>
                    <p> We know event planning is stressful. Our Corporate Concierge team is here to make it easier. Whether
                        your event is in-person, virtual, or a hybrid of both – we are here to help. We’ll provide
                        recommendations on what to buy, how much to buy, and when to buy it. Our concierge team will create
                        a fully custom order to fit your budget and event needs.</p>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 my-4" id="imageCol">
                    <img src="{{ asset('image/b2.png') }}" alt="Vodka" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    {{-- Office Restocking --}}
    <div class="container-fluid bg-1">
        <div class="container col-10">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-md-5 my-4 p3">
                    <img src="{{ asset('image/b3.png') }}" alt="Tequila" class="img-fluid w-100 h-100">
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 mb-5">
                    <h3><strong>Office Restocking</strong></h3>
                    <br>
                    <p>Looking for an easy way to set up office beverage delivery on a recurring basis? Our Corporate
                        Concierge team can help coordinate weekly or monthly drink deliveries to ensure your workspace is
                        fully stocked with employee favorites at all times. You’ll never have to worry about stocking the
                        office with alcohol again.</p>

                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- FAQs --}}

    <div class="container" style="margin-bottom: 32px">
        <h2 style="font-weight: 700; margin-top: 32px">FAQs</h2>
        <div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-19">
            <details>
                <summary class="ab-accordion-title"><strong>Is there a fee to sign up?</strong></summary>
                <div class="ab-accordion-text">
                    <p>There is no fee to sign up, but we do charge a small service fee for each order. These go
                        directly to WineShop as a business to help us deliver more exciting products, features, and
                        elevated services specific to our corporate customers.&nbsp;</p>
                    <p>Bonus: As a WineShop for Business customer, you’ll have access to competitive pricing and bulk
                        discounts.</p>
                </div>
            </details>
        </div>
        <div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-19">
            <details>
                <summary class="ab-accordion-title"><strong>How do I pay?</strong></summary>
                <div class="ab-accordion-text">
                    <p>We take every major credit card and receipts can be downloaded and printed directly from your
                        account under “My Orders.” After your first purchase, we’ll send you details on how to access
                        this.</p>
                </div>
            </details>
        </div>
        <div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-19">
            <details>
                <summary class="ab-accordion-title"><strong>Do you offer invoicing?</strong></summary>
                <div class="ab-accordion-text">
                    <p>We currently do not offer invoicing, but if you plan on placing recurring orders and are looking
                        for an easier way to consolidate receipts for expensing purposes, our Corporate Concierge Team
                        can help with that!</p>
                </div>
            </details>
        </div>

        <div class="wp-block-atomic-blocks-ab-accordion ab-block-accordion ab-font-size-19">
            <details>
                <summary class="ab-accordion-title"><strong>What time are your corporate concierge support hours of
                        operation?</strong></summary>
                <div class="ab-accordion-text">
                    <p>Our support hours are Monday-Thursday 8am-8pm and Friday 9:30am-8pm.</p>
                </div>
            </details>
        </div>
    </div>
@endsection
