<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["totalCustomers"] = User::count('id');
        $viewData["totalProducts"] = Product::count('id');
        $viewData["totalOrders"] = Order::count('id');
        $viewData["totalCategories"] = Category::count('id');
        return view('admin.dashboard.index')->with("viewData", $viewData);
    }
}
