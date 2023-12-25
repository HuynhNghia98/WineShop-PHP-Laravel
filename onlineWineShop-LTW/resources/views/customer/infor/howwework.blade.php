@extends('layout.app')
@section('content')
    <style>
        .custom-question {
            font-size: 19px;
            background-color: #DCDCDC;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 10px;
        }

        .centered-text {
            font-size: 19px;
            margin: 0;
            text-align: left width: 100%;
        }

        .custom-answer {
            font-size: 16px;
            text-align: left;
            padding-left: 22px;
            border-left: 2px solid #FF0000;
            margin-left: 20px;
            margin-top: 10px;
        }

        .custom-question.active {
            background-color: #f9f9f9;
        }

        .toggle-button {
            color: #DC143C;
            font-size: 22px;
            font-weight: bold;
            margin-right: 20px
        }
    </style>
    <section class="bg-prey">
        <div class="container col-10">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <img src="{{ asset('image/work.png') }}" alt="Work" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-7 my-5">
                    <h4 class="mb-0">
                        <strong style="font-size: 2em; color: #484848;">How this thing actually works.</strong>
                    </h4>
                    <p class="mt-2">
                        <small>We let you shop a huge selection of beer, wine and liquor and get it delivered to your door
                            in under 60 minutes. It’s super simple and lets you get back to doing whatever you’re
                            doing.</small>
                    </p>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger btn-lg"
                        style="font-weight: bold;">Start
                        shopping</a>
                </div>
            </div>
        </div>
    </section>
    {{-- 3 phần giới thiệu --}}
    <section class="bg-white p-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-group">
                        <div class="card-body text-center">
                            <div>
                                <i class="bi bi-1-circle" style="font-size: 5em; color:#696969"></i>
                                <h3 class="mt-4" style="font-weight: bold; color:#303030">Get started.
                                </h3>
                                <p style="padding-bottom: 10px;">Enter your address and browse the biggest selection of new,
                                    local, well-known and not-so-well-known products ever assembled EVER.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-group">
                        <div class="card-body text-center">
                            <div>
                                <i class="bi bi-2-circle" style="font-size: 5em; color:#696969"></i>
                                <h3 class="mt-4" style="font-weight: bold; color:#303030">Shop.</h3>
                                <p style="padding-bottom: 10px;">Pick your drinks, choose which store (or stores) you want
                                    to get them from and press that order button. We partner with retailers in your area,
                                    which means you get to support local businesses every time you order.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-group">
                        <div class="card-body text-center">
                            <div>
                                <i class="bi bi-3-circle" style="font-size: 5em; color:#696969"></i>
                                <h3 class="mt-4" style="font-weight: bold; color:#303030">Get it delivered.</h3>
                                <p style="padding-bottom: 10px;">Said store(s) will deliver said drinks to you, and we’ll
                                    let you know when your driver is on their way with the goods. Boom, drinks at your door
                                    in under 60 minutes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row ">
                <div class="col text-center" style="font-family: 'Times New Roman', Times, serif; padding-top: 50px;">
                    <p class="display-4" style="font-weight: bold;">FAQs</p>
                    <div class="col-12 col-md-6 mx-auto text-center">
                        <p class="mb-3" style="text-align: center">There are no dumb questions (except “Are fish wet?”).
                            Here are some
                            answers to our most frequently asked ones.</p>
                    </div>
                    {{-- các câu hỏi FAQs --}}
                    <div class="col-12 mb-3">
                        <div class="custom-question">
                            <p class="centered-text">How do we work ?</p>
                            <div class="toggle-button"></div>
                        </div>
                        <div class="custom-answer">
                            <p>WineShop partners with local liquor retailers to bring their inventory to your fingertips.
                                Just
                                download the WineShop app to a smartphone (iOS and Android), or use your Web browser to get
                                your favorite beer, wine or liquor delivered to your doorstep.</p>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="custom-question">
                            <p class="centered-text">Are you sure alcohol delivery is legal ?</p>
                            <div class="toggle-button"></div>
                        </div>
                        <div class="custom-answer">
                            <p>Yes, alcohol delivery is perfectly legal in the cities and states we serve. We've been
                                helping local
                                stores deliver beer, wine and liquor since 2012, so you can trust us that it’s all above
                                board!</p>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="custom-question">
                            <p class="centered-text">Can I tip my delivery driver ?</p>
                            <div class="toggle-button"></div>
                        </div>
                        <div class="custom-answer">
                            <p>Tips may be collected for delivery drivers/personnel during checkout. Please note that each
                                WineShop Retail
                                Partner manages their individual tipping policy at their own discretion, so the tip received
                                may be
                                distributed differently from store to store.</p>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="custom-question">
                            <p class="centered-text">How long does delivery take ?</p>
                            <div class="toggle-button"></div>
                        </div>
                        <div class="custom-answer">
                            <p>In most cases, deliveries take under an hour, but delivery times are subject to the stores
                                themselves, and
                                other variables such as time of day, order volume, and traffic conditions.</p>
                        </div>
                    </div>

                    <script>
                        const questions = document.querySelectorAll('.custom-question');
                        questions.forEach((question) => {
                            question.addEventListener('click', () => {
                                const answer = question.nextElementSibling;
                                const isActive = question.classList.contains('active');

                                questions.forEach((q) => {
                                    q.classList.remove('active');
                                    const toggleButton = q.querySelector('.toggle-button');
                                    toggleButton.textContent = '+';
                                });

                                if (!isActive) {
                                    question.classList.add('active');
                                    const toggleButton = question.querySelector('.toggle-button');
                                    toggleButton.textContent = '-';
                                    answer.style.display = 'block';
                                } else {
                                    const toggleButton = question.querySelector('.toggle-button');
                                    toggleButton.textContent = '+';
                                    answer.style.display = 'none';
                                }
                            });
                        });
                    </script>




                </div>
            </div>
        </div>


    </section>
@endsection
