<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    //
    public function index(){
    	$orders = Order::all();
    	$orders=DB::table('orders')
    	->join('customer_details', 'customer_details.customer_id', '=', 'orders.customer_id')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->get(); 
        
        return view('admin.orders',compact('orders'));
    }

    public function destroy($id)
        {
		$result=	Order::where('order_id', $id)
			->delete();
			if($result){
            return back()->with('success', 'Order has been deleted!!');

			}else{
            return back()->with('failure', "Order Does't Exist!!");

			}
        }
}
