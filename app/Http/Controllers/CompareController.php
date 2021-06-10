<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\WebPage;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(); 

         $allproducts = DB::table('products')
        ->where('status',1) 
        ->get();
        $colors = DB::table('products')
        ->join('product_colors', 'products.id', '=', 'product_colors.product_id')
        ->get(); 
        $pages =  WebPage::all();
        $product_videos = DB::table('product_videos')
         ->limit(3)
        ->get();

        return view('compare',compact('products','pages','product_videos','allproducts','colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_left($id)
    {
        $specifications = DB::table('specifications')
        ->join('products', 'products.id', '=', 'specifications.product_id')
        ->where('specifications.product_id',$id) 
        ->first();

        return view('ajax/compare_specs',compact('specifications'));
    }

    public function show_right($name)
    {
        $specifications = DB::table('specifications')
        ->join('products', 'products.id', '=', 'specifications.product_id')
        ->where('products.name','like', "%$name%") 
        ->first();
       /* ->where('products.name','like', "%$name%") */

        return view('ajax/compare_specs',compact('specifications'));
    }

    public function show($name)
    {
        $specifications = DB::table('specifications')
        ->join('products', 'products.id', '=', 'specifications.product_id')
        ->where('products.name','like', "%$name%") 
        ->first();
       /* ->where('products.name','like', "%$name%") */

        return view('ajax/compare_specs_right',compact('specifications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
