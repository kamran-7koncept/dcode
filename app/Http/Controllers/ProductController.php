<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator; 
class ProductController extends Controller
{
    //
    public function index(){
    	$products = DB::table('products')
        /* ->limit(3)*/
        ->get();
        return view('welcome',compact('products'));
    }

    public function Details($enc_id){
    	$product = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
    	->where('products.id',$enc_id) 
        ->first(); 

         $product_creativities = DB::table('product_creativities')
    	->where('product_id',$enc_id) 
        ->get();  
        $colors = DB::table('product_colors')
    	->where('product_id',$enc_id) 
        ->get(); 

        $color_images = DB::table('color_images')
        ->join('products', 'products.id', '=', 'color_images.product_id')
        ->where('color_images.product_id',$enc_id) 
        ->get();

        return view('product_details',compact('product','product_creativities','colors','color_images'));
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
            'customer_contact' => 'required|string|min:7|max:255', 
            'customer_city' => 'required|string|min:7|max:255', 

        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return back()->with('error', "Validation Error");
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
