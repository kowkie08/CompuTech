<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Order;
use Session;
class OrderController extends Controller
{
	public function getOrders(){
		   $orders = DB::table('orders')
            ->join('users', 'orders.customerID', '=', 'users.id')
            ->join('cities', 'orders.cityID', '=', 'cities.id')
            ->select('orders.*', 'users.first_name AS name', 'cities.city as city')
            ->get();

        return view("orders")->with('orders', $orders);
	}

   
}
