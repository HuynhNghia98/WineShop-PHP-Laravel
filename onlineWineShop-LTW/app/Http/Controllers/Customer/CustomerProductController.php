<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;
use Psy\CodeCleaner\FunctionContextPass;
use Symfony\Component\Console\Descriptor\Descriptor;

class CustomerProductController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $products = Product::query();
        $categories = Category::all();
        $viewData['best_sellers'] = Product::join('items', 'products.id', '=', 'items.product_id')
            ->select('products.id', 'products.name', 'products.price', 'products.image', DB::raw('SUM(items.quantity) as total_quantity'))
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image')
            ->orderBy('total_quantity', 'DESC');
        //chuc nang cua input search
        if ($request->input('searchInput')) {
            $products = Product::where('name', 'LIKE', '%' . ($request->input('searchInput')) . '%');
        }
        // chuc nang cho view all best sellers
        if ($request->input('bestsellers')) {
            $products = $viewData['best_sellers'];
        }
        // chuc nang cho view all
        if ($request->input('category')) {
            $categoryFromHomePage = Category::where('name', $request->input('category'))->first();
            if ($categoryFromHomePage) {
                $products = Product::where('category_id', $categoryFromHomePage->getId());
            }
            $viewData["products"] = $products;
        }
        //bo loc category
        if ($request->has('category_filter') && $request->input("category_filter") != 0) {
            $selectedCategories = $request->input("category_filter");
            $products->where('category_id', $selectedCategories);
        }
        //bo loc sap xep
        if ($request->sort) {
            $sortby = $request->sort;
            switch ($sortby) {
                case 'default':
                    $products;
                    break;
                case 'desc':
                    $products->orderBy('price', 'DESC');
                    break;
                case 'asc':
                    $products->orderBy('price', 'ASC');
                    break;
                case 'az':
                    $products->orderBy('name', 'ASC');
                    break;
                case 'za':
                    $products->orderBy('name', 'DESC');
                    break;
            }
        }
        $viewData['products'] = $products->get();
        $viewData['best_sellers'] = $viewData['best_sellers']->get();
        $viewData['ratings'] = Review::avgRatingProducts()->get();
        $viewData['total_rating'] = Review::totalReviewProducts()->get();
        $viewData['categories'] = $categories;

        return view('customer.product.index')->with("viewData", $viewData);
    }

    public function detailGet($id)
    {
        $viewData = [];
        $viewData["product"] = Product::find($id);
        $viewData['avg_rating'] = Review::avgRating($id);
        $viewData['total_review'] = Review::sumTotalReview($id);

        $viewData["products"] = Product::where("category_id", $viewData["product"]->getCategoryId())->get();
        $viewData['ratings'] = Review::avgRatingProducts()->get();
        $viewData['total_ratings'] = Review::totalReviewProducts()->get();

        // best sellers
        $bestSellers = Product::join('items', 'products.id', '=', 'items.product_id')
            ->select('products.id', 'products.name', 'products.price', 'products.image', DB::raw('SUM(items.quantity) as total_quantity'))
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image')
            ->orderBy('total_quantity', 'DESC');
        if ($bestSellers) {
            $viewData['best_sellers'] = $bestSellers->get();
        }
        // xu ly rating request
        return view("customer.product.detail")->with("viewData", $viewData);
    }

    public function detailPost(Request $request, $id)
    {
        $request->validate([
            "rating" => "required",
            "review" => "required",
        ]);
        $newReview = new Review();
        $newReview->setReview($request->input('review'));
        $newReview->setRating($request->input('rating'));
        if (Auth::user()) {
            $newReview->setName("");
            $newReview->setEmail("");
            $newReview->setProductId($id);
            $newReview->setUserId(Auth::user()->getId());
            $newReview->save();
        } else {
            $request->validate([
                "name" => "required|max:255",
                "email" => "required",
            ]);
            $newReview->setName($request->input('name'));
            $newReview->setEmail($request->input('email'));
            $newReview->setProductId($id);
            $newReview->setUserId("");
            $newReview->save();
        }

        return redirect()->route("customer.product.detail", ['id' => $id])->with("success", 'Add review successfully');
    }
}
