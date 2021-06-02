<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator; 
use App\Models\ProductDetail;
use App\Models\ProductVideo;
use App\Models\ProductCreativity;
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

'tp_technology' => 'required',
                    'display_ratio' => 'required', 
                    'ppi' => 'required',
                    'tp_multitouch' => 'required',
                    'rom' => 'required',
                    'frame' => 'required',
                    'back_cover' => 'required',
                    'sensors' => 'required',
                    'finger_print' => 'required',
                    'face_unlock' => 'required',
                    'charging_voltage' => 'required',
                    'video_streaming' => 'required', 
                    'fast_charge' => 'required',
                    'ac_input' => 'required',
                    'output_voltage' => 'required',
                    'output_current' => 'required',
                    'charging_time' => 'required',
                    'sim1_support' => 'required',
                    'sim2_support' => 'required',
                    'wifi_2-4' => 'required',
                    'wifi_5' => 'required',
                    'wifi_security' => 'required', 
                    'wifi_hotspot' => 'required',
                    'screen_cast' => 'required',
                    'features' => 'required',
                    'audio_jack' => 'required',
                    'mic_qty' => 'required',
                    'front_autofocus' => 'required',
                    'sensor_size' => 'required',
                    'aperture' => 'required',
                     'front_record' => 'required',
                    'rear_flash' => 'required',
                    'rear_video' => 'required',

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


                    'tp_technology' => $request->input('tp_technology'), 
                    'display_ratio' => $request->input('display_ratio'),
                    'ppi' => $request->input('ppi'),
                    'tp_multitouch' => $request->input('tp_multitouch'),
                    'rom' => $request->input('rom'),
                    'frame' => $request->input('frame'),
                    'back_cover' => $request->input('back_cover'),
                    'sensors' => $request->input('sensors'),
                    'finger_print' => $request->input('finger_print'),
                    'face_unlock' => $request->input('face_unlock'),
                    'charging_voltage' => $request->input('charging_voltage'), 
                    'video_streaming' => $request->input('video_streaming'),
                    'fast_charge' => $request->input('fast_charge'),
                    'ac_input' => $request->input('ac_input'),
                    'output_voltage' => $request->input('output_voltage'),
                    'output_current' => $request->input('output_current'),
                    'charging_time' => $request->input('charging_time'),
                    'sim1_support' => $request->input('sim1_support'),
                    'sim2_support' => $request->input('sim2_support'),
                    'wifi_2-4' => $request->input('wifi_2-4'),
                    'wifi_5' => $request->input('wifi_5'), 
                    'wifi_security' => $request->input('wifi_security'),
                    'wifi_hotspot' => $request->input('wifi_hotspot'),
                    'screen_cast' => $request->input('screen_cast'),
                    'features' => $request->input('features'),
                    'audio_jack' => $request->input('audio_jack'),
                    'mic_qty' => $request->input('mic_qty'),
                    'front_autofocus' => $request->input('front_autofocus'),
                    'sensor_size' => $request->input('sensor_size'),
                    'aperture' => $request->input('aperture'),
                    'front_record' => $request->input('front_record'),
                    'rear_flash' => $request->input('rear_flash'),
                    'rear_video' => $request->input('rear_video'),

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

'tp_technology' => 'required',
                    'display_ratio' => 'required', 
                    'ppi' => 'required',
                    'tp_multitouch' => 'required',
                    'rom' => 'required',
                    'frame' => 'required',
                    'back_cover' => 'required',
                    'sensors' => 'required',
                    'finger_print' => 'required',
                    'face_unlock' => 'required',
                    'charging_voltage' => 'required',
                    'video_streaming' => 'required', 
                    'fast_charge' => 'required',
                    'ac_input' => 'required',
                    'output_voltage' => 'required',
                    'output_current' => 'required',
                    'charging_time' => 'required',
                    'sim1_support' => 'required',
                    'sim2_support' => 'required',
                    'wifi_2-4' => 'required',
                    'wifi_5' => 'required',
                    'wifi_security' => 'required', 
                    'wifi_hotspot' => 'required',
                    'screen_cast' => 'required',
                    'features' => 'required',
                    'audio_jack' => 'required',
                    'mic_qty' => 'required',
                    'front_autofocus' => 'required',
                    'sensor_size' => 'required',
                    'aperture' => 'required',
                     'front_record' => 'required',
                    'rear_flash' => 'required',
                    'rear_video' => 'required',

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


                    'tp_technology' => $request->input('tp_technology'), 
                    'display_ratio' => $request->input('display_ratio'),
                    'ppi' => $request->input('ppi'),
                    'tp_multitouch' => $request->input('tp_multitouch'),
                    'rom' => $request->input('rom'),
                    'frame' => $request->input('frame'),
                    'back_cover' => $request->input('back_cover'),
                    'sensors' => $request->input('sensors'),
                    'finger_print' => $request->input('finger_print'),
                    'face_unlock' => $request->input('face_unlock'),
                    'charging_voltage' => $request->input('charging_voltage'), 
                    'video_streaming' => $request->input('video_streaming'),
                    'fast_charge' => $request->input('fast_charge'),
                    'ac_input' => $request->input('ac_input'),
                    'output_voltage' => $request->input('output_voltage'),
                    'output_current' => $request->input('output_current'),
                    'charging_time' => $request->input('charging_time'),
                    'sim1_support' => $request->input('sim1_support'),
                    'sim2_support' => $request->input('sim2_support'),
                    'wifi_2-4' => $request->input('wifi_2-4'),
                    'wifi_5' => $request->input('wifi_5'), 
                    'wifi_security' => $request->input('wifi_security'),
                    'wifi_hotspot' => $request->input('wifi_hotspot'),
                    'screen_cast' => $request->input('screen_cast'),
                    'features' => $request->input('features'),
                    'audio_jack' => $request->input('audio_jack'),
                    'mic_qty' => $request->input('mic_qty'),
                    'front_autofocus' => $request->input('front_autofocus'),
                    'sensor_size' => $request->input('sensor_size'),
                    'aperture' => $request->input('aperture'),
                    'front_record' => $request->input('front_record'),
                    'rear_flash' => $request->input('rear_flash'),
                    'rear_video' => $request->input('rear_video'),

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
                    $product = Product::where('id', $request->product_id)->get();
                    $product_detail = ProductDetail::where('product_id', $request->product_id)->get();
                    $product_videos = ProductVideo::where('product_id', $request->product_id)->get();
                    $product_creativity = ProductCreativity::where('product_id', $request->product_id)->get();
                    

                    if (count($product) > 0 && count($product_videos) > 0 && count($product_creativity) > 0) {

                    $aa =    Product::where('id', $request->product_id)
                        ->update([
                                'status' => 1
                            ]);
                        

                    }
  
                	 return redirect('/admin/products')->with('success','Operation Successfull'); 
                }else{
                	return back()->with('error','Operation unsuccessfull try again'); 
                }
	       
    }
}
