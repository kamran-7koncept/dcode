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

        public function update_order(Request $request){
        $order_id = $request->order_id;
        $order_status = $request->status;

        $result = DB::table('orders')->where('order_id', $order_id)->update(['status' => $order_status]);

        if ($result) {
             return redirect('/admin/orders')->with('success','Product info has been updated');
        }else{
            return redirect('/admin/orders')->with('error','not updated');
        }
        

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
