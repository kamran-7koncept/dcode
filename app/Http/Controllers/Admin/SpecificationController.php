<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator; 
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Specification;
use App\Models\ProductColor;

class SpecificationController extends Controller
{
    //
    public function specifications($id){
        $product = Product::where('id', $id)->first();
        $specifications = Specification::where('product_id',$id)->get();

        if(count($specifications) > 0){
         return redirect('/admin/products')->with('success','Specifications already Added');
        }else{         
        return view('admin.specifications',compact('product'));
        }
        
    }

    public function update(Request $request){

        $rules = [
                    'product_id' => 'required',
                    'dimentions' => 'required',
                    'protection' => 'required',
                    'os' => 'required',
                    'cpu' => 'required',
                    'gpu' => 'required',
                    'chipset' => 'required',
                    'network' => 'required',
                    'sim_support' => 'required', 
                    'battery' => 'required',
                    'display_type' => 'required',
                    'resolution' => 'required',
                    'weight' => 'required',
                    'internal_memory' => 'required',
                    'external_memory' => 'required',
                    'phone_size' => 'required',
                    'technology' => 'required',
                    'wlan' => 'required',
                    'bluetooth' => 'required',
                    'gps' => 'required',
                    'radio' => 'required',
                    'data' => 'required',
                    'usb' => 'required',
                    'nfc' => 'required',
                    'talk_time' => 'required',
                    'standby_time' => 'required',
                    'ram' => 'required',
                    'front_camera' => 'required',
                    'back_camera' => 'required',
                ];

                $validator = Validator::make($request->all(),$rules);
          /*  if ($validator->fails()) {
                 
                 dd($request);
                return back()->with('error', "Validation Error");
            }else{ */

       $res =  Specification::where('product_id', $request->input('product_id'))
        ->update([
                    'dimentions' => $request->input('dimentions'),
                    'protection' => $request->input('protection'),
                    'os' => $request->input('os'),
                    'cpu' => $request->input('cpu'),
                    'gpu' => $request->input('gpu'),
                    'chipset' => $request->input('chipset'),
                    'network' => $request->input('network'),
                    'sim_support' => $request->input('sim_support'), 
                    'battery' => $request->input('battery_type'),
                    'display_type' => $request->input('display_type'),
                    'resolution' => $request->input('resolution'),
                    'weight' => $request->input('weight'),
                    'internal_memory' => $request->input('internal_memory'),
                    'external_memory' => $request->input('external_memory'),
                    'phone_size' => $request->input('phone_size'),
                    'technology' => $request->input('technology'),
                    'wlan' => $request->input('wlan'),
                    'bluetooth' => $request->input('bluetooth'),
                    'gps' => $request->input('gps'),
                    'radio' => $request->input('radio'),
                    'data' => $request->input('data'),
                    'usb' => $request->input('usb'),
                    'nfc' => $request->input('nfc'),
                    'talk_time' => $request->input('talk_time'),
                    'standby_time' => $request->input('standby_time'),
                    'ram' => $request->input('ram'),
                    'front_camera' => $request->input('front_camera'),
                    'back_camera' => $request->input('back_camera'),
                ]);
          
                if ($res) {
                  return redirect('/admin/products')->with('success','Successful');

                }else{         

                return back()->with('error','unsuccessful'); 

                }

    }

    public function update_specifications($id){
        $product = Product::where('id', $id)->first();
        $specifications = Specification::where('product_id',$id)->get();

        if(count($specifications) > 0){

        return view('admin.update-specifications',compact('product','specifications'));

        }else{         

        return back()->with('error','Please add Specifications first'); 

        }
        
    }
    public function update_colors($id){

        $product = Product::where('id', $id)->first();
        $colors = ProductColor::where('product_id',$id)->get();

        if(count($colors) > 0){

        return view('admin.update-colors',compact('product','colors'));

        }else{         

        return back()->with('error','Please add Colors first'); 

        }
        
    }


    public function store(Request $request){ 
			    
                 $rules = [
                    'product_id' => 'required',
                    'dimentions' => 'required',
                    'protection' => 'required',
                    'os' => 'required',
                    'cpu' => 'required',
                    'gpu' => 'required',
                    'chipset' => 'required',
                    'network' => 'required',
                    'sim_support' => 'required', 
                    'battery' => 'required',
                    'display_type' => 'required',
                    'resolution' => 'required',
                    'weight' => 'required',
                    'internal_memory' => 'required',
                    'external_memory' => 'required',
                    'phone_size' => 'required',
                    'technology' => 'required',
                    'wlan' => 'required',
                    'bluetooth' => 'required',
                    'gps' => 'required',
                    'radio' => 'required',
                    'data' => 'required',
                    'usb' => 'required',
                    'nfc' => 'required',
                    'talk_time' => 'required',
                    'standby_time' => 'required',
                    'ram' => 'required',
                    'front_camera' => 'required',
                    'back_camera' => 'required',
                ];

			/* 	$validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) { 
  	            return back()->with('error', "incomplete information");
	        }else{ 

			*/	
                $values = array(
                    'product_id' => $request->input('product_id'),
                    'dimentions' => $request->input('dimentions'),
                    'protection' => $request->input('protection'),
                    'os' => $request->input('os'),
                    'cpu' => $request->input('cpu'),
                    'gpu' => $request->input('gpu'),
                    'chipset' => $request->input('chipset'),
                    'network' => $request->input('network'),
                    'sim_support' => $request->input('sim_support'), 
                    'battery' => $request->input('battery_type'),
                    'display_type' => $request->input('display_type'),
                    'resolution' => $request->input('resolution'),
                    'weight' => $request->input('weight'),
                    'internal_memory' => $request->input('internal_memory'),
                    'external_memory' => $request->input('external_memory'),
                    'phone_size' => $request->input('phone_size'),
                    'technology' => $request->input('technology'),
                    'wlan' => $request->input('wlan'),
                    'bluetooth' => $request->input('bluetooth'),
                    'gps' => $request->input('gps'),
                    'radio' => $request->input('radio'),
                    'data' => $request->input('data'),
                    'usb' => $request->input('usb'),
                    'nfc' => $request->input('nfc'),
                    'talk_time' => $request->input('talk_time'),
                    'standby_time' => $request->input('standby_time'),
                    'ram' => $request->input('ram'),
                    'front_camera' => $request->input('front_camera'),
                    'back_camera' => $request->input('back_camera'),
                );
				
                $specifications = DB::table('specifications')->insertGetId($values);	 

                if ($specifications > 0) {
  
                	 return redirect('/admin/products')->with('success','Operation Successfull'); 
                }else{
                	return back()->with('error','Operation unsuccessfull try again'); 
                }
	       
    }
}
