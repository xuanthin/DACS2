<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
// use Cart;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
   
    
    public function save_cart(Request $request) {
        $productId = $request->productid_hidden;
    
        $quantity = $request->qty;

        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
       
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        return Redirect::to('/show-cart');
        
    }
    public function show_cart() {
        return view('pages.cart.show_cart');
    }
    
    public function del_product ($session_id) {
        $cart = Session::get('cart');
        if($cart == true){
            foreach($cart as $key => $value){
                if($value['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return Redirect()->back()->with('message','Xoá sản phẩm thành công');
        }else{
            return Redirect()->back()->with('message','Xoá sản phẩm thất bại');
        }
    }
    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            foreach($data['cart_qty'] as $key => $qti){
                foreach($cart as $session => $val){
                    if($val['session_id'] == $key){
                        $cart[$session]['product_qty'] = $qti;
                    }
                }
            }
            Session::put('cart',$cart);
            return Redirect()->back()->with('message','Cập nhật số lượng thành công');
        }else{
            return Redirect()->back()->with('message','Cập nhật số lượng thất bại');
        }
    }
    
    public function add_cart_ajax(Request $request){
        // Session::forget('cart');
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity'=> $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],

            );
            Session::put('cart',$cart);
        }

        Session::save();

    }
}
