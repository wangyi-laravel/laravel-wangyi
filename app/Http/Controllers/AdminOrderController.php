<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * 后台订单控制
     */
    public function index()
    {
    	$orders = Order::all();
    	return view('admin.order.index',compact('orders'));
    }

}
