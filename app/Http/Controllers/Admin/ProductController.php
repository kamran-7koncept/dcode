<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductVideo;
use App\Models\ProductCreativity;
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

    public function detail_view($id){
        $product = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->where('products.id',$id) 
        ->first(); 
        $product_count = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->where('products.id',$id) 
        ->count(); 
         $product_creativities = DB::table('product_creativities')
        ->where('product_id',$id) 
        ->get();  
        $colors = DB::table('product_colors')
        ->where('product_id',$id) 
        ->get(); 
        $videos = DB::table('product_videos')
        ->where('product_id',$id) 
        ->get();
        $color_images = DB::table('color_images')
        ->join('products', 'products.id', '=', 'color_images.product_id')
        ->where('color_images.product_id',$id) 
        ->get();
        if ($product_count > 0) {
              return view('admin.product_details',compact('product','product_creativities','colors','color_images','videos'));
        }else{
           return  redirect('/admin/products/')->with('error','pick a valid Product');
        }
       

    }



    public function update_product_view($id){
        $product =  Product::where('id', $id)->first();

        return view('admin.update-product',compact('product'));
    }

     public function update_creativity_view($id){
        $product =  Product::where('id', $id)->first();
        $creativity =  ProductCreativity::where('product_id', $id)->get();

        return view('admin.update-creativity',compact('product','creativity'));
    }
        public function update_creativity(Request $request){
       
        $product_id=$request->id;


        if($request->hasfile('creativity_imgs'))
         {
            $count =1;
            foreach($request->file('creativity_imgs') as $file)
            {
                $name = $count++."-".Auth::id()."-".time().'.'.$file->extension();
                $file->move(public_path().'/images/', $name);  
                $data[] = $name;  
            } 

             for ($i=0; $i < sizeof($request->ids) ; $i++) { 
                        
                DB::table('product_creativities')->where('creativity_id', $request->ids[$i])->update(['creativity_img' => $data[$i]]);


                   }
            return redirect('/admin/products')->with('success','You have successfully Updated info.'); 
            //     DB::table('color_images')->insertGetId($values);
                
            }else{
            return redirect('/admin/products')->with('error','Failed please provide images');
            }
        
        }

    public function update_product(Request $request){
        if($request->hasfile('image'))
         {

         $imageName = Auth::id()."-".time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName); 

        $result = DB::table('products')->where('id', $request->product_id)->update(['name' => $request->name,'price' => $request->price,'details' => $request->details,'description' => $request->description,'image_path' => $imageName]);
        if ($result) {
             return redirect('/admin/products')->with('success','Product info has been updated');
        }else{
            return redirect('/admin/products')->with('error','not updated');
        }
        

         }else{

        $result = DB::table('products')->where('id', $request->product_id)->update(['name' => $request->name,'price' => $request->price,'details' => $request->details,'description' => $request->description]);
        if ($result) {
           return redirect('/admin/products')->with('success','Product info has been updated');
        }else{
            return redirect('/admin/products')->with('error','not updated');
        }
        

         }

        

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

    public function update_colors(Request $request){
        $color_name=$request->input('color_name');
        $product_id=$request->input('product_id');


        if($request->hasfile('color_imgs'))
         {
            $count =1;
            foreach($request->file('color_imgs') as $file)
            {
                $name = $count++."-".Auth::id()."-".time().'.'.$file->extension();
                $file->move(public_path().'/images/', $name);  
                $data[] = $name;  
            } 

             for ($i=0; $i < sizeof($request->ids) ; $i++) { 
                        
                DB::table('product_colors')->where('color_id', $request->ids[$i])->update(['color_name' => $request->color_name[$i]]);

                   }
            return redirect('/mobile/products')->with('success','You have successfully Updated info.'); 
            //     DB::table('color_images')->insertGetId($values);
                
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


    public function sleek_update(Request $request){
        // in progress

         $product_id=$request->product_id;


        if($request->hasfile('sleek_imgs') || $request->hasfile('overview_imgs'))
         { 
             
            if (!$request->hasfile('sleek_imgs') && $request->hasfile('overview_imgs')) {
                 $imageName = Auth::id()."-".time().'.'.$request->overview_imgs->extension();  
            $request->overview_imgs->move(public_path('images'), $imageName); 

                $res =  ProductDetail::where('product_id', $request->product_id)
        ->update(['sleek_info' => $request->sleek_info,
                    'overview_img' => $imageName,
                    'overview_info' => $request->overview_info]);

            }elseif($request->hasfile('sleek_imgs') && !$request->hasfile('overview_imgs')){
            $overview_imgs_name = "11".Auth::id()."-".time().'.'.$request->sleek_imgs->extension();  
            $request->sleek_imgs->move(public_path('images'), $overview_imgs_name);
                $res =  ProductDetail::where('product_id', $request->product_id)
        ->update(['sleek_img' => $overview_imgs_name,
                    'sleek_info' => $request->sleek_info,
                    'overview_info' => $request->overview_info]);


            }else{
                $overview_imgs_name = "11".Auth::id()."-".time().'.'.$request->overview_imgs->extension();  
            $request->overview_imgs->move(public_path('images'), $overview_imgs_name);
             $imageName = Auth::id()."-".time().'.'.$request->sleek_imgs->extension();  
            $request->sleek_imgs->move(public_path('images'), $imageName); 

                $res =  ProductDetail::where('product_id', $request->product_id)
        ->update(['sleek_img' => $imageName,
                    'sleek_info' => $request->sleek_info,
                    'overview_img' => $overview_imgs_name,
                    'overview_info' => $request->overview_info]);

            }

            
        if($res){
            return redirect('/admin/products')->with('success','You have successfully Updated Sleek info.'); 
        }else{
        return back()->with('failure','not Updated Sleek info.'); 
        }
            
            //     DB::table('color_images')->insertGetId($values);
                
            }else{
                $res =  ProductDetail::where('product_id', $request->product_id)
                ->update([
                    'sleek_info' => $request->sleek_info,
                    'overview_info' => $request->overview_info]);
                if($res){
            return redirect('/admin/products')->with('success','You have successfully Updated Sleek info.'); 
        }else{
        return back()->with('failure','not Updated Sleek info.'); 
        }
            }
        

    }
    public function videos(Request $request){
    	$video_link=$request->video_link;
        $product_id=$request->product_id;

         $collection = array();
         
        if ($video_link) {
            foreach ($video_link as $name) { 
                $collection[] = array('video_link' => $name, 'product_id' =>$product_id);
            }

            $videos = DB::table('product_videos')->insert($collection);  
            if ($videos) {
               return redirect('/admin/products')->with('success','videos added successfully');
            }else{
               return redirect('/admin/products')->with('error','videos Not Added');
                
            }
        }

    }

    public function video_view($id){
        $product = Product::where('id', $id)->first();
        $videos = ProductVideo::where('product_id',$product->id)->get();

        if(count($videos) < 1){
        return view('admin.videos',compact('product'));

    }else{
        return redirect('/admin/products')->with('success','Videos already Added');
    }

    }

    public function update_sleek_view($id){
        $product = Product::where('id', $id)->first();
        $product_details = ProductDetail::where('product_id',$id)->first();

        if($product_details != ""){

        return view('admin.update-sleek',compact('product','product_details'));

        }else{         

         /*$product_details = new Collection();
            
        $product_details->overview_img = '';
        $product_details->overview_info = '';
        $product_details->sleek_img = '';
        $product_details->sleek_info = '';*/

        return back()->with('error','Please Add Sleek info First');

        }
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
