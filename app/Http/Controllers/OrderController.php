<?php

namespace App\Http\Controllers;

use App\Good;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function TianJia(Request $request)
    {
        # code...
        
        $good_id = $request->order[0];
        $id = $request->$good_id;
        
        $orders = new Order;
        $orders -> title = $request -> title;
        $orders -> image = $request -> image;
        $orders -> color = $request -> color;
        $orders -> size = $request -> size;
        $orders -> price = $request -> price;
        $orders -> prices = $request -> prices;
        $orders -> amount = $request -> amount;
        $orders -> user_id = session('id');
        $orders -> good_id = $good_id;


        // $orders -> site = $site
        if ($orders->save()) {
            return redirect("/order/liebiao/{$id}")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    public function liebiao($id)
    {
        # code...
        $orders = Order::find($id);
        return view('home.order.index',compact('orders'));
    }
    public function chengnuo()
    {
    	return view('home.order.chengnuo');
    }
}
