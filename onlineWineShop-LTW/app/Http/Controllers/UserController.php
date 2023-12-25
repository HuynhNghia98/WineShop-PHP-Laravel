<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["user"] = Auth::user();
        return view("customer.user.index")->with("viewData", $viewData);
    }

    public function editGet()
    {
        $viewData = [];
        $viewData["user"] = Auth::user();
        return view("customer.user.edit")->with("viewData", $viewData);
    }
    public function editPost(Request $request)
    {
        $userId = auth()->id();
        $user = User::find($userId);
        if ($request) {
            $user->update([
                'name' => $request->input("username"),
            ]);
            $user->save();
        }

        return redirect()->route("customer.user.index")->with("success", "Change Info Successfully");
    }

    public function addGet()
    {
        $viewData = [];
        $user = auth()->user();
        $viewData["user"] = $user;
        return view("customer.user.add")->with("viewData", $viewData);
    }

    public function addPost(Request $request)
    {
        $viewData = [];
        $userId = auth()->id();
        $user = User::find($userId);
        if ($request) {
            $addBalance = $request->input("balance");
            $newBalance = $user->getBalance() + $addBalance;
            $user->update([
                'balance' => $newBalance,
            ]);
            $user->save();
        }

        return redirect()->route("customer.user.index")->with("success", "Change Info Successfully");
    }
}
