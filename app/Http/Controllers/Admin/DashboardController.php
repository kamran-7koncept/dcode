<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function store(Request $request){
    	           
			  /*      
				$rules = [
		            'name' => 'required',
				            'price' => 'required', 
				            'description' => 'required',
				            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				            'overview_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				            'sleek_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		        ];
*/
				
				
				$slug = Str::slug($request->pagename, '-');
				$values = array(
					'page_name' => $request->pagename,
                    'page_slug' => $slug,
                    'body_type' => $request->body_type,
                    'body_content' => $request->list,
                );
				
                $page_id = DB::table('web_pages')->insertGetId($values);
                if ($page_id > 0) {
                		return back()->with('success','Page Created');
                	}else{
                		return redirect('/admin/mobiles')->with('errorr','Page Not Created');

                	}	
                
	        }     
      
     
}
