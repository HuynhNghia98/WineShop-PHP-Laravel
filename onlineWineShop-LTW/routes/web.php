<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('customer.home.index');
// });

// CUSTOMER--------------------------------------------------------------------------------------------------
// HOME
Route::get("/", "App\Http\Controllers\Customer\CustomerController@index")->name("customer.home.index");
// PRODUCT
Route::get("/product", "App\Http\Controllers\Customer\CustomerProductController@index")->name("customer.product.index");

Route::get("/product/detail/{id}", "App\Http\Controllers\Customer\CustomerProductController@detailGet")->name("customer.product.detail");
Route::post("/product/detail/{id}", "App\Http\Controllers\Customer\CustomerProductController@detailPost")->name("customer.product.detail");

// INFOR WINE
Route::get("/infor/wineinfo", "App\Http\Controllers\Customer\InforController@wineinfo")->name("customer.infor.wineinfo");

//FOOTER
Route::get("/infor/howwework", "App\Http\Controllers\Customer\InforController@howwework")->name("customer.infor.howwework");
Route::get("/infor/aboutus", "App\Http\Controllers\Customer\InforController@aboutus")->name("customer.infor.aboutus");
Route::get("/infor/careers", "App\Http\Controllers\Customer\InforController@careers")->name("customer.infor.careers");
Route::get("/infor/business", "App\Http\Controllers\Customer\InforController@business")->name("customer.infor.business");
Route::get("/infor/data", "App\Http\Controllers\Customer\InforController@data")->name("customer.infor.data");
// ADMIN-----------------------------------------------------------------------------------------------------
Route::middleware('admin')->group(function () {
    Route::get("/admin", "App\Http\Controllers\Admin\AdminHomeController@index")->name("admin.home.index");
    Route::get("/admin/category/index", "App\Http\Controllers\Admin\AdminCategoryController@index")->name("admin.category.index");
    //Create
    Route::get("/admin/category/create", "App\Http\Controllers\Admin\AdminCategoryController@getCreate")->name("admin.category.create");
    Route::post("/admin/category/create", "App\Http\Controllers\Admin\AdminCategoryController@postCreate")->name("admin.category.create");
    //Update
    Route::get("/admin/category/edit/{id}", "App\Http\Controllers\Admin\AdminCategoryController@getUpdate")->name("admin.category.edit");
    Route::post("/admin/category/edit/{id}", "App\Http\Controllers\Admin\AdminCategoryController@postUpdate")->name("admin.category.edit");
    //Remove
    Route::get("/admin/category/delete/{id}", "App\Http\Controllers\Admin\AdminCategoryController@getDelete")->name("admin.category.delete");
    Route::delete("/admin/category/delete/{id}", "App\Http\Controllers\Admin\AdminCategoryController@postDelete")->name("admin.category.delete");
    //Dashboard
    Route::get("/admin/dashboard/index", "App\Http\Controllers\Admin\AdminHomeController@index")->name("admin.dashboard.index");
    //Order
    Route::get("/admin/order/index", "App\Http\Controllers\Admin\AdminOrderController@index")->name("admin.order.index");
    Route::get("/admin/order/detail/{id}", "App\Http\Controllers\Admin\AdminOrderController@detail")->name("admin.order.detail");
    //User
    Route::get("/admin/user/index", "App\Http\Controllers\Admin\AdminUserController@index")->name("admin.user.index");
    // PRODUCT
    Route::get("/admin/product/index", "App\Http\Controllers\Admin\AdminProductController@index")->name("admin.product.index");
    // Detail
    Route::get("/admin/product/detail/{id}", "App\Http\Controllers\Admin\AdminProductController@getDetail")->name("admin.product.detail");
    //Create
    Route::get("/admin/product/create", "App\Http\Controllers\Admin\AdminProductController@getCreate")->name("admin.product.create");
    Route::post("/admin/product/create", "App\Http\Controllers\Admin\AdminProductController@postCreate")->name("admin.product.create");
    //Update
    Route::get("/admin/product/edit/{id}", "App\Http\Controllers\Admin\AdminProductController@getUpdate")->name("admin.product.edit");
    Route::post("/admin/product/edit/{id}", "App\Http\Controllers\Admin\AdminProductController@postUpdate")->name("admin.product.edit");
    //Remove
    Route::get("/admin/product/delete/{id}", "App\Http\Controllers\Admin\AdminProductController@getDelete")->name("admin.product.delete");
    Route::delete("/admin/product/delete/{id}", "App\Http\Controllers\Admin\AdminProductController@delDelete")->name("admin.product.delete");
});
Auth::routes();


// CART----------------------------------------------
Route::get("/cart", "App\Http\Controllers\CartController@index")->name("cart.index");
Route::post("/cart/add/{id}", "App\Http\Controllers\CartController@add")->name("cart.add");
Route::get("/cart/delete", "App\Http\Controllers\CartController@delete")->name("cart.delete");
Route::get("/cart/delete/{id}", "App\Http\Controllers\CartController@deleteItemInCart")->name("cart.deleteItemInCart");
Route::post('/cart/updateQuantity/{id}', 'App\Http\Controllers\CartController@updateQuantity')->name('cart.updateQuantity');

Route::middleware('auth')->group(function () {
    Route::get("/cart/purchase", "App\Http\Controllers\CartController@purchase")->name("cart.purchase");
    Route::get("/my-account/orders", "App\Http\Controllers\MyAccountController@orders")->name("myaccount.orders");
});

//User-------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get("/info", "App\Http\Controllers\UserController@index")->name("customer.user.index");
    Route::get("/info/edit", "App\Http\Controllers\UserController@editGet")->name("customer.user.edit");
    Route::post("/info/edit", "App\Http\Controllers\UserController@editPost")->name("customer.user.edit");
    Route::get("/info/add", "App\Http\Controllers\UserController@addGet")->name("customer.user.add");
    Route::post("/info/add", "App\Http\Controllers\UserController@addPost")->name("customer.user.add");
});
