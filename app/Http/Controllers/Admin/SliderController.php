<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function index(){
        $sliders = Slider::all();

        return view('admin.slider',compact('sliders'));

    }

    public function view(Request $request){
        $slider = Slider::where('slider_id',$request->slider_id)->get();

        return view('admin.update_slider',compact('slider'));

    }
}
