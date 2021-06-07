<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\Models\WebPage;
class ProductController extends Controller
{
    //
    public function index(){
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

        $product_videos = DB::table('product_videos')
         ->limit(3)
        ->get();

        $pages =  WebPage::all();
        return view('welcome',compact('products','pages','product','product_videos','allproducts'));
    }

    public function colors($id){
        $colors=Product::where('product_id',$id)->get();

        return $colors;
    }
    
    public function shop()
    {
        $products = Product::all();
      //  dd($products);
        $product_videos = DB::table('product_videos')
         ->limit(3)
        ->get();
        $allproducts = DB::table('products')
        ->where('status',1) 
        ->get();
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products,'product_videos'=>$product_videos,'allproducts'=>$allproducts]);
    }


    public function Details($enc_id){
        $pages =  WebPage::all();

        $products = DB::table('products')
        ->where('status',1) 
         ->limit(3)
        ->get();

    	$product = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
    	->where('products.slug',$enc_id) 
        ->first(); 
        if ($product) {
            

         $product_creativities = DB::table('product_creativities')
    	->where('product_id',$product->id) 
        ->get();  
        $colors = DB::table('product_colors')
    	->where('product_id',$product->id) 
        ->get(); 

        $color_images = DB::table('product_colors')
        ->join('products', 'products.id', '=', 'product_colors.product_id')
        ->where('product_colors.product_id',$product->id) 
        ->get();

        $product_videos = DB::table('product_videos')
         ->limit(3)
        ->get();
        return view('product_details',compact('product','product_creativities','colors','color_images','pages','products','product_videos'));
    }else{
        return redirect("/")->with("error","Please Choose one of the product");
    }
    }

    public function order(Request $request){
        $product_id = $request->input('product_id');

        $product = DB::table('products')
        ->where('id',$product_id) 
        ->first();

        return view('order',compact('product'));

    }
    public function order_now(Request $request){
          $rules = [
            'customer_name' => 'required|string|min:3|max:255',
            'customer_address' => 'required|string|min:3|max:255',
            'customer_email' => 'required|string|email|max:255',
            'customer_contact' => 'required', 
            'customer_city' => 'required|string|max:255', 

        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('/')->with('error', "Validation Error");
        }else{
            
            try{ 

                $values = array('customer_name' => $request->input('customer_name'),
                    'customer_email' =>$request->input('customer_email'), 
                    'address' => $request->input('customer_address'),
                    'contact' => $request->input('customer_contact'),
                    'city'=>$request->input('customer_city'),
                    'product_id' =>$request->input('product_id'), 
                ); 
                $customer_id = DB::table('customer_details')->insertGetId($values);
                 $order = array(
                    'product_id' => $request->input('product_id'),
                    'customer_id' =>$customer_id, 
                );
                DB::table('orders')->insert($order);
 
                return redirect('/')->with('success',"Your Order Has Been Created");
            }catch(Exception $e){
                return redirect('/')->with('error',$e);
            } 
        }
    }

    

}
