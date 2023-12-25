@extends('layout.app')
@section('content')
    <style>
        .img-responsive {
            display: block;
            height: auto;
            max-width: 100%;
        }

        col-md-4 {
            width: 33.33333333%;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <img src="{{ asset('image/careers-header.png') }}" alt="Careers" class="img-fluid"
                    style="max-width: 100%; height: auto;">
            </div>
            <div style="padding-left:10px; padding-right:10px">
                <p
                    style="font-size: 34px;color: rgb(72,77,85);font-family: BrandonGrotesque-Black, 'Open Sans', sans-serif;" "=""><span id="selection-marker-1" class="redactor-selection-marker"></span>Hi, we're WineShop<span id="selection-marker-1" class="redactor-selection-marker"></span>.<span id="selection-marker-1" class="redactor-selection-marker"></span><span id="selection-marker-1" class="redactor-selection-marker"></span><span id="selection-marker-1" class="redactor-selection-marker"></span></p>
                                                                                                                                                                        
                                                                                                                                                                        <p style="font-size: 20px;font-family:BrandonText-Regular, sans-serif;color: rgb(0,0,0)" "="">
                    <span id="selection-marker-1" class="redactor-selection-marker"></span><span id="selection-marker-1"
                        class="redactor-selection-marker"></span>We're here to help people savor life's moments. We also
                    like working on big&nbsp;problems with smart <span id="selection-marker-1"
                        class="redactor-selection-marker"></span>people, who are equally motivated. We are blazing <span
                        id="selection-marker-1" class="redactor-selection-marker"></span>a tr<span id="selection-marker-1"
                        class="redactor-selection-marker"></span>ail in an industry that hasn't changed in nearly a century,
                    and that doesn't scare us (well, not all the time)... and even when it does, it doesn't stop us -- it
                    energizes us.
                </p>
                <p style="font-size: 34px;color: rgb(72,77,85);font-family: Work Sans;"><br></p>
            </div>
            <div style="padding-left:10px; padding-right:10px">
                <p
                    style="font-size: 34px;color: rgb(72,77,85);font-family: BrandonGrotesque-Black, 'Open Sans', sans-serif;">
                    We care. We grow. We solve.</p>

                <p style="font-size: 20px; font-family:BrandonText-Regular, sans-serif;color: rgb(0,0,0)">These values are
                    part of our DNA. They define how we approach our work, our customers and each other. We are more than
                    just another tech company. There is an intellectual curiosity that occurs at WineShop. We have a desire
                    to
                    question, to understand, to figure it out. Bottom line, we solve it. We value not just the truth but the
                    process to get to the truth, to deliberate, decide and then act. Most importantly, we care. We care
                    about our customers. We care about our company. We care about our team. We champion a growth mindset
                    that allows us to take risks, learn and scale. We choose to push ourselves and find opportunities to
                    bring out the best in each other. There will be long days and incredible challenges. We're making life's
                    moments, the good times just a little bit better through our tools and products.
                    &nbsp;</p>

            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4 img-responsive">
                        <img src="{{ asset('image/careers1.png') }}" alt="Careers">
                    </div>
                    <div class="col-md-4 img-responsive">
                        <img src="{{ asset('image/careers2.png') }}" alt="Careers">
                    </div>
                    <div class="col-md-4 img-responsive">
                        <img src="{{ asset('image/careers3.png') }}" alt="Careers">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Diversity, equity, inclusion and belonging makes us better.</h2>
                    <p>
                        At WineShop, Diversity, Equity, Inclusion and Belonging (DEIB) is not a side initiative, but core to
                        how we operate. <br> <br>

                        We are committed to cultivating an inclusive environment where a diverse set of people can and want
                        to do their best work. <br> <br>

                        As we continue our DEIB journey, we want to take this opportunity to share the work that we are
                        doing, the progress we have made, and we want to be transparent about our gaps and opportunities.
                    </p>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger btn-lg"
                        style="font-weight: bold;">Start
                        shopping</a>
                </div>
                <div class="col-md-6 d-none d-md-none d-lg-block">
                    <img src="{{ asset('image/idea.png') }}" alt="idea">
                </div>
            </div>
        </div>
    </section>
@endsection
