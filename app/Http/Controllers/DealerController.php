<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dealer;
use Illuminate\Support\Facades\DB;

class DealerController extends Controller
{
    //
    public function index(){
        $dealers =  Dealer::all();
       $product = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->first();
        $product_videos = DB::table('product_videos')
         ->limit(3)
        ->get();
        $allproducts = DB::table('products')
        ->where('status',1) 
        ->get();
        $colors = DB::table('products')
        ->join('product_colors', 'products.id', '=', 'product_colors.product_id')
        ->get(); 
        $products = DB::table('products')
        ->where('status',1) 
         ->limit(3)
        ->get();
    	return view('dealers_locator',compact('dealers','product','products','allproducts','product_videos','colors'));
    }
}
