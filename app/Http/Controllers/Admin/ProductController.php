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
use Illuminate\Support\Facades\File; 


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
        ->get(); 
         $product_creativities = DB::table('product_creativities')
        ->where('product_id',$id) 
        ->get();  
        $colors = DB::table('product_colors')
        ->where('product_id',$id) 
        ->get(); 
        $videos = DB::table('product_videos')
        ->where('product_id',$id) 
        ->get();
        $color_images = DB::table('product_colors')
        ->join('products', 'products.id', '=', 'product_colors.product_id')
        ->where('product_colors.product_id',$id) 
        ->get();
        if (count($product_count) > 0) {
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
                $creativity_image = DB::table('product_creativities')
                ->where('creativity_id', $request->ids[$i])
                ->first();
                $image_name = $creativity_image->creativity_img;
                 File::delete('images/'.$image_name);
                 
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

        $product_image = DB::table('products')
                ->where('id', $request->product_id)
                ->first();
                $image_name = $product_image->image_path;
                 File::delete('images/'.$image_name);
                 

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

    //     $collection = array();
         
        if ($color_name) {

           /* foreach ($color_name as $name) { 
                if($request->hasfile('color_imgs'))
                     {
                        for ($i=0; $i < sizeof($request->color_imgs) ; $i++) { 
                            $collection[] = array('color_name' => $name, 'product_id' =>$product_id,
                                'color_img' =>$product_id,
                            );

                        }
                     }else{

                        $collection[] = array('color_name' => $name, 'product_id' =>$product_id);

                     }

            }

            DB::table('product_colors')->insert($collection); */
    
         

        if($request->hasfile('color_imgs'))
         {
            $count =1;
            $number=0;

            foreach($request->file('color_imgs') as $file)
            {
                $collection = array();

                $name = $count++."-".Auth::id()."-".time().'.'.$file->extension();
                $file->move(public_path().'/images/', $name);  
                $data[] = $name; 

                if ($number <= sizeof($request->color_name) && $color_name[$number] != "")
            //    if ($request->color_name[$number++]) 
                {

                     $collection[] = array('color_name' => $request->color_name[$number],
                 'product_id' =>$product_id,
                 'color_img' =>$name);

                }else{

                     $collection[] = array(
                 'product_id' =>$product_id,
                 'color_img' =>$name);

                }
                $number++;
            DB::table('product_colors')->insert($collection); 


            } 

           /* foreach ($data as $image_info) {

                $values = array(
                    'img_name' => $image_info,
                    'product_id'=>$product_id,
                );

                 DB::table('color_images')->insertGetId($values);
                
            }*/

         }
        
        }

    }

    public function update_colors(Request $request){
        //in progress
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

                $color_image = DB::table('product_colors')
                ->where('color_id', $request->ids[$i])
                ->first();
                $image_name = $color_image->color_img;
                 File::delete('images/'.$image_name);
                 
                        
                DB::table('product_colors')->where('color_id', $request->ids[$i])->update(['color_name' => $request->color_name[$i],
                    'color_img' => $data[$i]]);

                   }
            return redirect('/admin/products')->with('success','You have successfully Updated info.'); 
            //     DB::table('color_images')->insertGetId($values);
                
            }else{


             for ($i=0; $i < sizeof($request->ids) ; $i++) { 
 
                        
                DB::table('product_colors')->where('color_id', $request->ids[$i])->update(['color_name' => $request->color_name[$i]]);

                   }

            return redirect('/admin/products')->with('success','You have successfully Updated info.');
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
            DB::table('product_videos')->insert(array('video_link' => $request->video_link, 'product_id' =>$product_id));

            

         }
         return back()->with('Success','Operation Successfull'); 

    }


    public function sleek_update(Request $request){
        
         $product_id=$request->product_id;


        if($request->hasfile('sleek_imgs') || $request->hasfile('overview_imgs'))
         { 
             
            if (!$request->hasfile('sleek_imgs') && $request->hasfile('overview_imgs')) {
                 $imageName = Auth::id()."-".time().'.'.$request->overview_imgs->extension();  
            $request->overview_imgs->move(public_path('images'), $imageName);

            $sleek_image = DB::table('product_details')
                ->where('product_id', $request->product_id)
                ->first();
            $image_name = $sleek_image->overview_img;
                 File::delete('images/'.$image_name);
                 


                $res =  ProductDetail::where('product_id', $request->product_id)
        ->update(['sleek_info' => $request->sleek_info,
                    'overview_img' => $imageName,
                    'overview_info' => $request->overview_info]);

            }elseif($request->hasfile('sleek_imgs') && !$request->hasfile('overview_imgs')){
            $overview_imgs_name = "11".Auth::id()."-".time().'.'.$request->sleek_imgs->extension();  
            $request->sleek_imgs->move(public_path('images'), $overview_imgs_name);
            

            $sleek_image = DB::table('product_details')
                ->where('product_id', $request->product_id)
                ->first();
            $image_name = $sleek_image->sleek_img;
                 File::delete('images/'.$image_name);
               


            $res =  ProductDetail::where('product_id', $request->product_id)
        ->update(['sleek_img' => $overview_imgs_name,
                    'sleek_info' => $request->sleek_info,
                    'overview_info' => $request->overview_info]);


            }else{
                $overview_imgs_name = "11".Auth::id()."-".time().'.'.$request->overview_imgs->extension();  
            $request->overview_imgs->move(public_path('images'), $overview_imgs_name);
             $imageName = Auth::id()."-".time().'.'.$request->sleek_imgs->extension();  
            $request->sleek_imgs->move(public_path('images'), $imageName); 

            $sleek_image = DB::table('product_details')
                ->where('product_id', $request->product_id)
                ->first();
            $image_name = $sleek_image->sleek_img;
                 File::delete('images/'.$image_name);

            $image_name2 = $sleek_image->overview_img;
                 File::delete('images/'.$image_name2);
                  

                $res =  ProductDetail::where('product_id', $request->product_id)
        ->update(['sleek_img' => $imageName,
                    'sleek_info' => $request->sleek_info,
                    'overview_img' => $overview_imgs_name,
                    'overview_info' => $request->overview_info]);

            }

            
        if($res){
            return redirect('/admin/products')->with('success','You have successfully Updated Sleek info.'); 
        }else{
        return back()->with('error','not Updated Sleek info.'); 
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
        return back()->with('error','not Updated Sleek info.'); 
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
                $product = Product::where('id', $request->product_id)->get();
                    $product_detail = ProductDetail::where('product_id', $request->product_id)->get();
                    $product_videos = ProductVideo::where('product_id', $request->product_id)->get();
                    $product_creativity = ProductCreativity::where('product_id', $request->product_id)->get();
                    

                    if (count($product) > 0 && count($product_detail) > 0 && count($product_creativity) > 0) {

                       $aa = Product::where('id', $request->product_id)
                        ->update([
                                'status' => 1
                            ]);
                       
                    }
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
            return back()->with('error', "Order Does't Exist!!");

            }
            
        }
    public function verify_product(Request $request){

            $name = $request->name;

            $product =  Product::where('name', $name)->count();
            

            if ($product > 0) {

                return 1;
                
            }else{

                return 0;

            }
         }
}
