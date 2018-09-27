<?php

namespace App\Http\Controllers;

use App\Good;
use App\Order;
use App\Site;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //将购物车数据加到订单页里
    public function TianJia(Request $request)
    {
        
        # code...
        $arr = explode('-',$request->order[0]);
        $good_id = $arr[0];
        $id = $arr[1];
        
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
        $orders -> cart_id = $id;

        
        
        // $orders -> site = $site
        if ($orders->save()) {
        	$cart_id = Order::where('cart_id',$id)->first();
        	$dd = $cart_id['id'];
            return redirect("/order/liebiao/{$dd}")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    //把order数据库里的数据放到订单页面上
    public function liebiao($id)
    {
        # code...
        $sites = Site::all();
        $orders = Order::find($id);
        return view('home.order.index',compact('orders','sites'));
    }

    // public function chengnuo()
    // {
    // 	return view('home.order.chengnuo');
    // }

    
}
