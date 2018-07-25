<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\OrderDetail;
use Session;

class OrderDetailController extends Controller
{
    //
    public function getOrderDetails(Request $request){
    	   $orderDetails = DB::table('order_details')
            ->join('orders', 'order_details.orderID', '=', 'orders.id')
            ->join('products', 'order_details.productID', '=', 'products.id')
            ->select('order_details.*', 'products.name AS name')
            ->get();

        return view("order_detail")->with('orderDetails', $orderDetails);
    }
}
