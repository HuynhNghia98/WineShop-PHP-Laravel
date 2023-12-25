<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Faker\Guesser\Name;

class AdminOrderController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["orders"] = Order::all();
        return view('admin.order.index')->with("viewData", $viewData);
    }
    public function detail($id)
    {
        $viewData = [];
        $viewData["order"] = Order::find($id);
        $viewData["items"] = Item::where("order_id", $id)->get();
        return view('admin.order.detail')->with("viewData", $viewData);
    }
}
