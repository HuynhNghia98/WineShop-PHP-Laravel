@extends('layout.app')
@section('content')
    {{-- whiskey --}}
    <div class="container-fluid bg-1">
        <div class="container col-10">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-md-5 my-4">
                    <img src="{{ asset('image/whisky.jpg') }}" alt="Whiskey" class="img-fluid w-100">
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 mb-5">
                    <h3><strong>Whiskey - Whisky</strong></h3>
                    <p> <small>The term "whisky" originates from the Gaelic term "Uisce Beatha," meaning 'water of life,' in
                            the languages of the Irish and Scottish people.</small></p>
                    <div class="more">
                        <p>Whisky's origins date back to the 15th and 16th centuries when Irish monks brought distillation
                            techniques from the Mediterranean. Irish Whiskey appeared around 1405, gaining popularity among
                            the English, including Queen Elizabeth I. In 1608, the first Whiskey distillery was licensed,
                            marking the start of blended Whiskey. Irish Whiskey added an "e" to its name to distinguish
                            itself from Scotch Whisky. </p>
                        <p>Popular Whisky/Whiskey types include Scotland, Ireland, American Whiskey, Single Malt and more.
                            These authentic imports are available at WineShop with excellent prices.</p>
                    </div>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Vodka --}}
    <div class="container-fluid">
        <div class="container col-10">
            <div class="row" id="contentRow">
                <div class="col-sm-12 col-md-6 my-md-5 mb-5" id="textCol">
                    <h3><strong>Vodka</strong></h3>
                    <p> <small>Vodka is widely produced and consumed in Eastern European countries such as Russia and Poland
                            since the 14th century, but its name "vodka" originates from the Slavic term "voda," meaning
                            "water".</small></p>
                    <div class="more">
                        <p> In theory, vodka should be tasteless and odorless. This is the reason why it mixes so well with
                            many ingredients to create some of the top favorite classic vodka cocktails. However, the
                            producers needed to make the spirit more palatable for the average drinker, so they introduced
                            flavored vodka.
                            To make vodka, most producers use fermented grains, like rye, or potatoes, but the premium
                            varieties may also come from exotic fruits and sugar alcohols. This spirit undergoes a
                            multiphase distillation process, which gives it a considerable alcohol content(often ranging
                            from 35% to 50% by volume). Because of this, many producers add distilled water.
                            However, there are also distillers who like to keep the alcohol content super high, up to 98%
                            ABV (alcohol by volume). These spirits are best to pair with mixers and make cocktails. Most
                            vodka producers are in Russia, Lithuania, Belarus and Latvia, but this iconic liquor hails from
                            all around the world.
                            You'll also find some premium bottles coming from the United States!
                        </p>
                        <p>Popular vodka brands include Absolut, Smirnoff, Grey Goose, Belvedere, and more, all of which are
                            available at WineShop as authentic imports with excellent prices.</p>
                    </div>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 my-4" id="imageCol">
                    <img src="{{ asset('image/vodka.jpg') }}" alt="Vodka" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    {{-- Tequila --}}
    <div class="container-fluid bg-1">
        <div class="container col-10">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-md-5 my-4">
                    <img src="{{ asset('image/tequila.jpg') }}" alt="Tequila" class="img-fluid w-100 h-100">
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 mb-5">
                    <h3><strong>Tequila</strong></h3>
                    <p> <small>Tequila is a distilled spirit from Jalisco, Mexico made from the fermentation of sugars found
                            in the blue agave plant. </small></p>
                    <div class="more">
                        <p>In the local Nahuatl language, the word "tequila" means "volcanic rock". However, true Tequila is
                            exclusively distilled from the blue agave plant. Tequila production follows time-honored
                            traditions, with each era introducing new variations to cater to evolving tastes.
                            There are many other cocktail recipes you can prepare with tequila. If you have orange juice on
                            hand, try mixing it with an old favorite or a new tequila to create a classic tequila
                            screwdriver. If you're feeling experimental, switch up that tequila for mezcal for something a
                            little smokier.
                        </p>
                        <p>
                            Alternatively, mix dry vermouth with blanco tequila for a unique kind of martini. Maybe you're
                            not looking for any additives. If so, try sipping on tequila. Many tequila aficionados love to
                            sip tequila over ice. When your refrigerator is almost empty, you can still have fun by mixing
                            tequila with any leftover beverages you may have. The resulting cocktail is simple but very
                            enjoyable. If you want to add a healthy touch to your booze, mix the liquor with fresh pineapple
                            juice.
                        </p>
                        <p>Popular types of Tequila include Silver/Blanco/Joven, Gold, Reposado, Anejo, and Extra Anejo.
                            These authentic Tequilas are available at WineShop, offering genuine imports at exceptional
                            prices.</p>
                    </div>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Gin --}}
    <div class="container-fluid">
        <div class="container col-10">
            <div class="row" id="contentRow1">
                <div class="col-sm-12 col-md-6 my-md-5 mb-5" id="textCol1">
                    <h3><strong>Gin</strong></h3>
                    <p> <small>Its name comes from the French name of the juniper berry, "genievre." Bartenders soon
                            shortened the name to "gin." Not surprising, given that the spirit's main ingredient is the
                            juniper berry.</small></p>
                    <div class="more">
                        <p>Gin has its origins in Dutch Jenever. Initially, Jenever was created by distilling malt wine and
                            adding various herbs to produce a more flavorful beverage. With the increasing popularity of
                            modern gin, the characteristics of juniper berries are gradually being replaced by attributes
                            derived from other botanicals such as orange peel, lemon, and floral elements.</p>
                        <p>Popular types of Tequila include London Dry Gin, Modern Gin, and Genever. These authentic Gin are
                            available at WineShop, offering genuine imports at exceptional prices.</p>
                    </div>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 my-4" id="imageCol1">
                    <img src="{{ asset('image/gin.jpg') }}" alt="Gin" class="img-fluid w-100 h-100">
                </div>
            </div>
        </div>
    </div>
    {{-- Brandy --}}
    <div class="container-fluid bg-1">
        <div class="container col-10">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-md-5 my-4">
                    <img src="{{ asset('image/brandy.jpg') }}" alt="Brandy" class="img-fluid w-100 h-100">
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 mb-5">
                    <h3><strong>Brandy</strong></h3>
                    <p> <small>Brandy originates from the Dutch word "brandewijn," meaning "burnt wine." It is a strong
                            spirit distilled from wine or other fermented fruit juices.</small></p>
                    <div class="more">
                        <p>Standard brandy is made from grapes, similar to wine, but it can also be produced from other
                            fruits like apples, apricots, and cherries. These are often categorized as "fruit brandies" or
                            eau-de-vie. Most types of brandy are bottled at around 40% alcohol by volume.</p>
                        <p>Popular types of Tequila include Hennessy Cognac VSOP, Hennessy XO Cognac, Napoleon Brandy, and
                            more. These authentic Brandy are available at WineShop, offering genuine imports at exceptional
                            prices.</p>
                    </div>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Rum --}}
    <div class="container-fluid">
        <div class="container col-10">
            <div class="row" id="contentRow2">
                <div class="col-sm-12 col-md-6 my-md-5 mb-5" id="textCol2">
                    <h3><strong>Rum</strong></h3>
                    <p> <small>According to some evidence, rum comes from Southeast Asia. But others say the wine comes from
                            the Caribbean. </small></p>
                    <div class="more">
                        <p>Before becoming the drink of choice of pirates, rum was born as a creative way to use up excess
                            molasses, a byproduct of cane sugar, during Colonial times. The farmers learned that they could
                            ferment and distill molasses to craft what would soon become one of the most popular liquors in
                            the Caribbean. In particular, it became the favorite drink of sailors and, you guessed it,
                            pirates. In some areas, this spirit also served as currency.</p>
                        <p>Popular types of Tequila include Bacardi Carta Blanca Superior White Rum, Bacardi Carta Oro
                            Superior Gold Rum, Bacardi Carta Negra Superior Black Rum, and more. These authentic Rum are
                            available at WineShop, offering genuine imports at exceptional prices.</p>
                    </div>
                    <a href="{{ route('customer.home.index') }}" class="btn btn-danger mt-3">Order Now</a>
                </div>
                <div class="col-sm-12 col-md-6 my-md-5 my-4" id="imageCol2">
                    <img src="{{ asset('image/rum.jpg') }}" alt="Rum" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn {
            font-size: 20px;
        }

        @media (max-width: 768px) {
            .more {
                display: none;
            }

            .img-fluid {
                margin-bottom: 0px;
            }
        }
    </style>
    <script>
        function adjustLayout() {
            if (window.innerWidth < 768) { // Chuyển sang sm 
                document.getElementById('contentRow').classList.add('flex-column-reverse');
                document.getElementById('imageCol').classList.remove('order-md-2');
                document.getElementById('textCol').classList.remove('order-md-1');

                document.getElementById('contentRow1').classList.add('flex-column-reverse');
                document.getElementById('imageCol1').classList.remove('order-md-2');
                document.getElementById('textCol1').classList.remove('order-md-1');

                document.getElementById('contentRow2').classList.add('flex-column-reverse');
                document.getElementById('imageCol2').classList.remove('order-md-2');
                document.getElementById('textCol2').classList.remove('order-md-1');
            } else {
                document.getElementById('contentRow').classList.remove('flex-column-reverse');
                document.getElementById('imageCol').classList.add('order-md-2');
                document.getElementById('textCol').classList.add('order-md-1');

                document.getElementById('contentRow1').classList.remove('flex-column-reverse');
                document.getElementById('imageCol1').classList.add('order-md-2');
                document.getElementById('textCol1').classList.add('order-md-1');

                document.getElementById('contentRow2').classList.remove('flex-column-reverse');
                document.getElementById('imageCol2').classList.add('order-md-2');
                document.getElementById('textCol2').classList.add('order-md-1');
            }
        }

        // Sử dụng addEventListener để gắn sự kiện load và resize
        window.addEventListener('load', adjustLayout);
        window.addEventListener('resize', adjustLayout);
    </script>
@endsection
