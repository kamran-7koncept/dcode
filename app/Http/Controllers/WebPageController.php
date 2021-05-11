<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebPage;

class WebPageController extends Controller
{
    public function page($name){
    	$page =  WebPage::where('page_slug', $name)->first();
    	$pages =  WebPage::all();

	//	WebPage::get()->where(''page_slug', $name);
    	return view('page',compact('page','pages'));
    }
}
