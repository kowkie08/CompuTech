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

      $orders = DB::table('orders')
            ->join('users', 'orders.customerID', '=', 'users.id')
            ->join('cities', 'orders.cityID', '=', 'cities.id')
            ->select('orders.*', 'user.name AS name', 'cities.name as city')
            ->get();

        return view("orders")->with('orders', $orders);
}
