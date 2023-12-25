<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Guesser\Name;

class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["users"] = User::all();
        return view('admin.user.index')->with("viewData", $viewData);
    }
}
