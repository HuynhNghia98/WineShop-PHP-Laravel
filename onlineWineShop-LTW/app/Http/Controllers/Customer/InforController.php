<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InforController extends Controller
{
    public function wineinfo(){
        return view("customer.infor.wineinfo");
    }


    public function howwework(){
        return view("customer.infor.howwework");
    }


    public function aboutus(){
        return view("customer.infor.aboutus");
    }

    public function careers(){
        return view("customer.infor.careers");
    }

    public function business(){
        return view("customer.infor.business");
    }

    public function data(){
        return view("customer.infor.data");
    }
}
 