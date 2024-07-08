<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class StoreController extends Controller
{
    public function cuahang() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->paginate(6);
        return view('pages.cuahang')->with('category',$cate_product)->with('all_product',$all_product);
    }
    public function news() {
        return view('pages.news');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function search(Request $request) {
        $keywords = $request->keywords_submit;
        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.sanpham.search')->with('search_product',$search_product);
    }
    
}
