<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPriceByQuantities($productsInCart, $productsInSession);
        }
        $viewData = [];
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('cart.index')->with("viewData", $viewData);
    }

    public function add(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $quantity = $request->input('quantity');
        if ($quantity > $product->getQuantity()) {
            return redirect()->back()->withErrors(['error' => 'Quantity not enough.']);
        }
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);
        return back()->with('success', 'Add to Cart Successfully');
    }

    public function delete(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
    public function deleteItemInCart($id, Request $request)
    {
        $productsInSession = $request->session()->get("products");
        if (array_key_exists($id, $productsInSession)) {
            unset($productsInSession[$id]);
            $request->session()->put('products', $productsInSession);
        }
        return back();
    }

    public function updateQuantity(Request $request, $id)
    {
        $newQuantity = $request->input('quantity');
        $productsInSession = $request->session()->get("products");

        if (array_key_exists($id, $productsInSession)) {
            $productsInSession[$id] = $newQuantity;
            $request->session()->put('products', $productsInSession);
        }
        return back();
    }

    public function purchase(Request $request)
    {
        $productsInSession = $request->session()->get("products");

        if ($productsInSession) {
            $userId = Auth::user()->getId();
            $order = new Order();
            $order->setUserId($userId);
            $order->setTotal(0);
            $order->save();
            $total = 0;
            $productsInCart = Product::findMany(array_keys($productsInSession));
            foreach ($productsInCart as $product) {
                $quantity = $productsInSession[$product->getId()];
                $item = new Item();
                $item->setQuantity($quantity);
                $item->setPrice($product->getPrice());
                $item->setProductId($product->getId());
                $item->setOrderId($order->getId());
                $item->save();
                $total = $total + ($product->getPrice() * $quantity);

                // Trừ số lượng mua vào số lượng của sản phẩm
                $product->setQuantity($product->getQuantity() - $quantity);
                $product->save();
            }
            $order->setTotal($total);
            $order->save();
            $newBalance = Auth::user()->getBalance() - $total;
            Auth::user()->setBalance($newBalance);
            Auth::user()->save();
            $request->session()->forget('products');
            return back()->with("success", "Congratulations, purchase completed. Order number is #" . $order->getId());
        } else {
            return redirect()->route('cart.index');
        }
    }
}
