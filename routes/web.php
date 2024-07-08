<?php

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

//frontend
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/cua-hang','App\Http\Controllers\StoreController@cuahang');
Route::get('/tin-tuc','App\Http\Controllers\StoreController@news');
Route::post('/tim-kiem','App\Http\Controllers\StoreController@search');

//Lien he trang
Route::get('/lien-he','App\Http\Controllers\ContactController@lien_he');
Route::get('/information','App\Http\Controllers\ContactController@information');
Route::post('/update-info/{info_id}','App\Http\Controllers\ContactController@update_info');
Route::post('/save-info','App\Http\Controllers\ContactController@save_info');

//danh muc san pham
Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryProduct@show_category');
Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@details_product');


//backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//Category Product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');

Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//Product
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::get('/unactive-hot-product/{product_id}','App\Http\Controllers\ProductController@unactive_hot_product');
Route::get('/active-hot-product/{product_id}','App\Http\Controllers\ProductController@active_hot_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

//Cart
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/del-product/{session_id}','App\Http\Controllers\CartController@del_product');
Route::post('/add-cart-ajax', 'App\Http\Controllers\CartController@add_cart_ajax');


//Checkout
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
Route::get('/order','App\Http\Controllers\CheckoutController@order');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment');
Route::post('/add-customers','App\Http\Controllers\CheckoutController@add_customers');
Route::get('/login-customers','App\Http\Controllers\CheckoutController@login_customers');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::post('/confirm-order','App\Http\Controllers\CheckoutController@confirm_order');

//Order
Route::get('/manage-order','App\Http\Controllers\CheckoutController@manage_order');
Route::get('/delete-order/{order_id}','App\Http\Controllers\CheckoutController@delete_order');
Route::get('/view-order/{orderId}','App\Http\Controllers\CheckoutController@view_order');

