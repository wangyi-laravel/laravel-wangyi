<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * 后台订单控制
     */
    
    //显示页面
    public function index()
    {
    	$orders = Order::all();
    	return view('admin.orders.index',compact('orders'));
    }


    //删除
    public function delete($id)
    {
    	$orders = Order::findOrFail($id);

        if ($orders->delete()) {
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        } 	
    }

    //更新
    public function edit($id)
    {
    	$orders =  Order::findOrFail($id);
    	return view('admin.orders.edit',compact('orders'));
    }
}
