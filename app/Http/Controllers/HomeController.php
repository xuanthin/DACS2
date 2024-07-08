<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index() {
        $all_product = DB::table('tbl_product')->where('product_hot_status','0')->orderby('product_id','desc')->limit(6)->get();
        return view('pages.home')->with('all_product',$all_product);
    }
    
}
