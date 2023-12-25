<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['products'] = Product::all();
        $viewData['whiskey'] = Product::where('category_id', '=', 1)->get();
        $viewData['vodka'] = Product::where('category_id', '=', 2)->get();
        $viewData['tequila'] = Product::where('category_id', '=', 4)->get();
        $viewData['redwine'] = Product::where('category_id', '=', 7)->get();

        // best sellers
        $viewData['best_sellers'] = Product::join('items', 'products.id', '=', 'items.product_id')
            ->select('products.id', 'products.name', 'products.price', 'products.image', DB::raw('SUM(items.quantity) as total_quantity'))
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image')
            ->orderBy('total_quantity', 'DESC')
            ->get();

        $viewData['ratings'] = Review::avgRatingProducts()->get();
        $viewData['total_rating'] = Review::totalReviewProducts()->get();
        return view('customer.home.index')->with("viewData", $viewData);
    }
}
