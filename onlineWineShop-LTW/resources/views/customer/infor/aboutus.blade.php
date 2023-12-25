@extends('layout.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <img src="{{ asset('image/CareerPg_AboutUs.png') }}" alt="AboutUs" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-12">
                    <p
                        style="font-size: 36px; color: rgb(72,77,85);
                    font-family: BrandonGrotesque-Black, 'Open Sans', sans-serif;">
                        Our Story <br></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 18px; font-family:BrandonText-Regular, sans-serif;color: rgb(72,77,85)">
                        HI, WE'RE WineShop.
                    </p>
                    <p style="font-size: 18px; font-family:BrandonText-Regular, sans-serif;color: rgb(72,77,85)">
                        <span id="selection-marker-1" class="redactor-selection-marker"></span>WineShop started as a simple
                        text from one friend to another: “Why can't you get alcohol delivered?" When we realized that
                        alcohol delivery was, in fact, legal, we set out with a little bit of luck and a lotta bit of
                        determination to build a three-tier compliant technology company that would change the way we shop
                        for beer, wine, and spirits.
                    </p>
                    <p style="font-size: 18px; font-family:BrandonText-Regular, sans-serif;color: rgb(72,77,85)">
                        Today, WineShop is the largest online marketplace for alcohol in North America. Our purpose is to be
                        there when it matters – committed to life's moments and the people who create them. We partner with
                        thousands of retailers in more than 1,400 cities to empower them to grow their businesses and make
                        our customers' good times better. WineShop is available to 100M+ customers and counting across the
                        U.S. and Canada, offering a rich e-commerce shopping experience with personalized content,
                        competitive and transparent pricing, and an unrivaled selection.
                    </p>
                </div>
            </div>
            <div>
                <div class="scrivito-column-widget row default-grid">
                    <div class="col-md-6">
                        <div>
                            <div>
                                <div class="text-widget--clamp-">
                                    <center>
                                        <div style="height:350px;width:350px;">
                                            <img src="{{ asset('image/work.png') }}" alt="Work" class="img-fluid">
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <div>
                                <div class="text-widget--clamp-">
                                    <div style="padding-left:10px; padding-right:10px">
                                        <p
                                            style="font-size: 24px;color: rgb(72,77,85);font-family: BrandonGrotesque-Black, 'Open Sans', sans-serif;">
                                            Customers<br></p>
                                        <p
                                            style="font-size: 18px; font-family:BrandonText-Regular, sans-serif;color: rgb(72,77,85)">
                                            From the spur-of-the-moment movie nights to the spare-no expense parties of the
                                            year, we're here to help make your good times a little bit better. Shop across
                                            your local retailers to access the widest selection of beer, wine and spirits
                                            online and get convenient delivery right to your door in under 60 minutes.
                                        </p>
                                    </div>
                                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger btn-lg"
                                        style="font-weight: bold;">Start
                                        shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-widget--clamp-">
                            <div style="padding-top:30px;">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="scrivito-column-widget row default-grid">
                            <div class="col-md-6">
                                <div>
                                    <div>
                                        <div class="text-widget--clamp-">
                                            <center>
                                                <div style="height:350px;width:350px">
                                                    <img src="https://cdn0.scrvt.com/8e692ce327983776c63ffbd47040a3d8/488ba975233ad830/2f1ab0b8ffba/v/1352f046b101/1219-Retailer-Als-5.jpg?nowebp=1"
                                                        width="100%" height="auto"><br>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <div>
                                        <div class="text-widget--clamp-">
                                            <div style="padding-left:10px; padding-right:10px">
                                                <p
                                                    style="font-size: 24px;color: rgb(72,77,85);font-family: BrandonGrotesque-Black, 'Open Sans', sans-serif;">
                                                    Retailers</p>
                                                <p
                                                    style="font-size: 18px; font-family:BrandonText-Regular, sans-serif;color: rgb(72,77,85)">
                                                    By partnering with WineShop, you get access to millions of customers
                                                    looking to buy online from their local liquor store. It's completely
                                                    free to sign up as a WineShop Retail Partner, enabling you to easily
                                                    bring
                                                    your shelves online and start growing your sales today.
                                                </p>
                                            </div>
                                            <a href="{{ route('customer.home.index') }}" class="btn btn-danger btn-lg"
                                                style="font-weight: bold;">Start
                                                shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="text-widget--clamp-">
                                    <div style="padding-top:30px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <div>
                                        <div class="scrivito-column-widget row default-grid">
                                            <div class="col-md-6">
                                                <div>
                                                    <div>
                                                        <div class="text-widget--clamp-">
                                                            <center>
                                                                <div style="padding-bottom:30px;height:350px;width:350px">
                                                                    <img src="https://cdn0.scrvt.com/8e692ce327983776c63ffbd47040a3d8/1775eebeef7f42c0/c0bdff2e15af/v/9b8e82f09bb9/1119-Bulleit-Ketel-Baileys-15--1-.jpg?nowebp=1"
                                                                        width="100%" height="auto"><br>
                                                                </div>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div>
                                                    <div>
                                                        <div class="text-widget--clamp-">
                                                            <div style="padding-left:10px; padding-right:10px">
                                                                <p
                                                                    style="font-size: 24px;color: rgb(72,77,85);font-family: BrandonGrotesque-Black, 'Open Sans', sans-serif;">
                                                                    Producers<br></p>
                                                                <p
                                                                    style="font-size: 18px; font-family:BrandonText-Regular, sans-serif;color: rgb(72,77,85)">
                                                                    As the market leader in online alcohol sales, we can
                                                                    partner with your brand to take your ecommerce business
                                                                    to the next level. Tap into robust, predictive sales
                                                                    data, optimize your inventory&nbsp;or partner with
                                                                    WineShop on marketing efforts to drive sales of your
                                                                    products.
                                                                </p>
                                                            </div>
                                                            <a href="{{ route('customer.home.index') }}"
                                                                class="btn btn-danger btn-lg"
                                                                style="font-weight: bold;">Start
                                                                shopping</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-widget--clamp-">
                                            <div style="padding-top:30px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-widget--clamp-"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
