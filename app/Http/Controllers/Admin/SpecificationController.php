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

class SpecificationController extends Controller
{
    //
    public function specifications($id){
        $product = Product::where('id', $id)->first();
         
        return view('admin.specifications',compact('product'));
    }

    public function store(Request $request){ 
			        
				$rules = [
		            'product_id' => 'required',
		            'connectivity' => 'required',
				    'os' => 'required',
				    'sim_support' => 'required',
				    'performance' => 'required',
				    'battery' => 'required',
				    'display_type' => 'required',
				    'resolution' => 'required',
				    'weight' => 'required',
				    'dimentions' => 'required',
				    'internal_storage' => 'required',
				    'ram' => 'required',
				    'front_cam' => 'required',
				    'back_cam' => 'required',
				    'details' => 'required', 
		        ];

				$validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) {
	        	 
	            return back()->with('error', "Validation Error");
	        }else{

				$values = array('product_id' => $request->input('product_id'),
                    'connectivity' => $request->input('connectivity'),
                    'dimentions' => $request->input('dimentions'),
                    'weight' => $request->input('weight'),
                    'os' => $request->input('os'),
                    'sim_support' => $request->input('sim_support'),
                    'display_type' => $request->input('display_type'),
                    'resolution' => $request->input('resolution'),
                    'internal_memory' => $request->input('internal_storage'),
                    'ram' => $request->input('ram'),
                    'performance' => $request->input('performance'),
                    'battery' => $request->input('battery'),
                    'front_camera' => $request->input('front_cam'),
                    'back_camera' => $request->input('back_cam'),
                    'description' => $request->input('details'),
                );
				
                $specifications = DB::table('specifications')->insertGetId($values);	 

                if ($specifications > 0) {
  
                	 return redirect('/admin/products')->with('success','Operation Successfull'); 
                }else{
                	return back()->with('error','Operation unsuccessfull try again'); 
                }
	        }   
    }
}
