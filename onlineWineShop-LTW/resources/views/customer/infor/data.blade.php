@extends('layout.app')
@section('content')
    <img src="{{ asset('image/databia.png') }}" class="img-fluid">
    {{-- Phần  Latest Articles --}}
    <section class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-size: 2rem"><strong>Latest Articles</strong></h2>
            </div>
            <div class="col-12 col-md-3 p-4">
                <img src="{{ asset('image/data1.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                <h5>
                    <strong>WineShop’s Top Predictions for Fall 2023 Beverage Sales</strong>
                </h5>
                <p>E-commerce purchasing data suggests drinkers will be reaching for seasonal drinks, like crisp lagers and
                    Italian reds, this fall</p>
            </div>


            <div class="col-12 col-md-3 p-4">
                <img src="{{ asset('image/data2.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                <h5>
                    <strong>Category on the Rise: Orange Wine</strong>
                </h5>
                <p>Skin-fermented wines from around the world are beginning to gain popularity beyond major metropolitan
                    areas, offering opportunity for retailers across the country</p>
            </div>


            <div class="col-12 col-md-3 p-4">
                <img src="{{ asset('image/data3.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                <h5>
                    <strong>5 Insights from WineShop’s July 2023 Sales</strong>
                </h5>
                <p>Cocktail-making is up, light lagers and RTDs surpass hard seltzer over July 4th weekend, and more from
                    last month’s sales on WineShop</p>
            </div>


            <div class="col-12 col-md-3 p-4">
                <img src="{{ asset('image/data4.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                <h5>
                    <strong>Inside the Rise of the Spritz Cocktail</strong>
                </h5>
                <p>The Venetian cocktail has become a global phenomenon, expanding beyond its aperitif roots and into RTD
                    cocktails, innovative flavors, and menus across the country</p>
            </div>
        </div>
    </section>

    {{-- Phần  Category Forecast Reports --}}
    <div class="container-fluid bg-1">
        <div class="row">
            <div class="col-12 p-5 text-center">
                <h2 style="font-size: 2rem"><strong>Category Forecast Reports</strong></h2>
            </div>
            <div class="col-12 col-md-4 my-md-5 my-4">
                <div class="text-center">
                    <img src="{{ asset('image/data5.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                    <h5>
                        <strong>Category on the Rise: Orange Wine</strong>
                    </h5>
                    <p>Skin-fermented wines from around the world are beginning to gain popularity beyond major metropolitan
                        areas, offering opportunity for retailers across the country</p>
                </div>
            </div>

            <div class="col-12 col-md-4 my-md-5 my-4">
                <div class="text-center">
                    <img src="{{ asset('image/data6.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                    <h5>
                        <strong>BevAlc Insights’ 2023 Hard Lemonade Report</strong>
                    </h5>
                    <p>Refreshing, bold flavor, new brand entries, and real fruit juice are fueling the category’s continued
                        rise</p>
                </div>
            </div>

            <div class="col-12 col-md-4 my-md-5 my-4">
                <div class="text-center">
                    <img src="{{ asset('image/data7.png') }}" class="img-fluid" style="margin-bottom: 10px;">
                    <h5>
                        <strong>BevAlc Insights’ 2023 Pinot Noir Forecast</strong>
                    </h5>
                    <p>The easy-drinking, generally lighter-bodied wine saw gains in share and average unit price in line
                        with
                        increasing demand for reds in the summertime</p>
                </div>
            </div>
        </div>
    </div>
@endsection
