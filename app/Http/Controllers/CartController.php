<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function shop()
    {
        $all_products = Product::where('status', 1)->get();
      //  dd($all_products);
        $products = DB::table('products')
        ->where('status',1) 
         ->limit(3)
        ->get();

        $allproducts = DB::table('products')
        ->where('status',1) 
        ->get();


        $product = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->first();
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products,'all_products'=>$all_products,'product'=>$product,'allproducts'=>$allproducts]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
      //  dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }
     public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart')->with('success_msg', 'Car is cleared!');
    }

}
