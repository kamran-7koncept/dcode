<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dealer;
use Illuminate\Support\Facades\Validator; 

class DealerController extends Controller
{
    //
    public function index(){

    	$dealers = Dealer::all();
    	return view('admin.dealers',compact('dealers'));
    }

    public function store(Request $request){

           $rules = [
                    'city' => 'required',
                    'contact' => 'required',
                    'address' => 'required',
                ];
            $validator = Validator::make($request->all(),$rules);
		        if ($validator->fails()) { 
	  	            return back()->with('error', "incomplete information");
		        }else{

		        	$values = array(
                    'city' => 'required',
                    'contact' => 'required',
                    'address' => 'required',
                );

		        	$dealer = new Dealer;
		        	$dealer->city = $request->city;
		        	$dealer->contact = $request->contact;
		        	$dealer->address = $request->address;
		        	$dealer->save();

		        	return back()->with('success',"Insert successfully");

		        }
    }
}
