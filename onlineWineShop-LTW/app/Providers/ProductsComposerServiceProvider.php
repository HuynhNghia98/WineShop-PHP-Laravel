<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ProductsComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layout.app', function ($view) {
            $viewData['products'] = Product::all();
            $viewData['wineCategories'] = Category::whereNotIn('name', ["Red Wine", "White Wine", "Pink Wine", "Beer"])->get();
            $viewData['vangCategories'] = Category::whereIn('name', ["Red Wine", "White Wine", "Pink Wine"])->get();
            $view->with('viewData', $viewData);
        });
    }
}
