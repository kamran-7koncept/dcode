<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Product;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all(); 
        return view('admin.mobiles',compact('products' ));
    }


    public function store(Request $request){
 
            if ($request->hasFile('image')) {
			        
				$rules = [
		            'name' => 'required',
				            'price' => 'required', 
				            'description' => 'required',
				            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				            'overview_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				            'sleek_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		        ];

				$validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) {
	        	 
	            return back()->with('error', "Validation Error");
	        }else{

				$imageName = Auth::id()."-".time().'.'.$request->image->extension();  
				$request->image->move(public_path('images'), $imageName);

				
				$slug = Str::slug($request->input('name'), '-');
				$values = array('name' => $request->input('name'),
                    'slug' => $slug,
                    'details' => $request->input('details'),
                    'price' => $request->input('price'),/*
                    'shipping_cost' => $request->input('shipping'),*/
                    'description' => $request->input('description'),
                    'image_path' => $imageName,
                );
				
                $product_id = DB::table('products')->insertGetId($values);	
                if ($product_id > 0) {
 
                	$overviewimage = $product_id."".Auth::id()."-".time().'.'.$request->overview_img->extension();  
					$request->overview_img->move(public_path('images'), $overviewimage);
					$id=$product_id+12;
					$sleekimage = $id."".Auth::id()."-".time().'.'.$request->sleek_img->extension();  
					$request->sleek_img->move(public_path('images'), $sleekimage);
                	$detail_values = array(
                		'product_id' => $product_id,
                    'overview_img' => $overviewimage ,
                    'sleek_img' => $sleekimage,
                	);
                  DB::table('product_details')->insertGetId($detail_values);	
                	  
                	 return compact('product_id'); 
                }else{
                	return back()->with('error','Operation unsuccessfull'); 
                }
	        }     
        			 
		}
    }
    public function colors(Request $request){
        $color_name=$request->input('color_name');
        $product_id=$request->input('product_id');

         $collection = array();
         
        if ($color_name) {
            foreach ($color_name as $name) { 
                $collection[] = array('color_name' => $name, 'product_id' =>$product_id);
            }

            DB::table('product_colors')->insert($collection); 

        if($request->hasfile('color_imgs'))
         {
            $count =1;
            foreach($request->file('color_imgs') as $file)
            {
                $name = $count++."-".Auth::id()."-".time().'.'.$file->extension();
                $file->move(public_path().'/images/', $name);  
                $data[] = $name;  
            } 

            foreach ($data as $image_info) {
                $values = array(
                    'img_name' => $image_info,
                    'product_id'=>$product_id,
                );

                 DB::table('color_images')->insertGetId($values);
                
            }

         }
        
        }

    }
    // not needed now code is in store function
    public function overview(Request $request){
    	$product_id = $request->input('product_id');
    	 if ($request->hasFile('overview') || $request->hasFile('sleek')) {
			        
				$rules = [
				            'overview' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				            'sleek' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		        ];

				$validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) {
	        	 
	            return back()->with('error', "Validation Error");
	        }else{

				$overview_img = Auth::id()."-".time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/overview'), $overview_img); 
				
				$sleek_img = Auth::id()."-".time().'.'.$request->image->extension();  
				$request->image->move(public_path('images/sleek'), $sleek_img); 

				$values = array(
                    'overview_img' => $overview_img,
                    'sleek_img' => $sleek_img,
                    'product_id'=>$product_id,
                );

                $product_detail_id = DB::table('product_details')->insertGetId($values);	
                if ($product_detail_id > 0) {
                	 return redirect('/mobile/create')->with('success','You have successfully upload image.'); 
                }else{
                	return back()->with('error','Operation Unsuccessfull'); 
                }
	        }     
        			 
		}

    }
    public function creativity(Request $request){
    	 
    	$this->validate($request, [
                'creativity_imgs' => 'required',
                'creativity_imgs.*' => 'mimes:jpg,jpeg,png'
        ]);


        if($request->hasfile('creativity_imgs'))
         {
         	$count =1;
            foreach($request->file('creativity_imgs') as $file)
            {
                $name = $count++."-".Auth::id()."-".time().'.'.$file->extension();
                $file->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
            $product_id=$request->input('product_id');
            foreach ($data as $image_info) {
                $values = array(
                    'creativity_img' => $image_info,
                    'product_id'=>$product_id,
                );

                 DB::table('product_creativities')->insertGetId($values);
                
            }

         }
         return back()->with('Success','Operation Successfull'); 

    }


    public function sleek(Request $request){
    	

    }
    public function videos(Request $request){
    	

    }
    public function destroy($id)
        {

            $result = Product::find($id)->delete();

            if($result){
                
            return back()->with('success', 'Product has been deleted!!');

            }else{
            return back()->with('failure', "Order Does't Exist!!");

            }
            
        }
}
