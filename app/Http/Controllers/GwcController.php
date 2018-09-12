<?php

namespace App\Http\Controllers;

use App\Cart_items;
use App\Color;
use App\Good;
use App\Size;
use Session;
use Illuminate\Http\Request;

class GwcController extends Controller
{
    //

    public function create($id)
    {
    	$cart = new Cart_items;
    	// $good = Good::findOrFail($id);
    	$goods = request()->all();
    	
    	// $cart-> title = $good->title;
    	// $cart-> color = $colors->$id;
    	// $cart-> size = $size->$id;
    	
    	$good =Good::find($id);

    	// $color = request()->color_id;
    	$cart->title = $good->title;
    	$cart->image = $good->image;
    	$cart->price = $good->price;
    	$cart->color = request()->color_id;
    	$cart->size = request()->size_id;
    	$cart->user_id = Session::get('id');
    	$colors = Color::first();
    	$size = Size::first();

    	// dd($colors);



    	if($cart->save()){
    		return redirect('/home/cart_items')->with('success','添加成功');

    	}else{
    		return back()->with('error','添加失败');
    	}
    	

    	
    	
    	// dd($colors);
    	
    }


    public function index()
    {

    	$cart = Cart_items::all();
    	$colors = Color::all();
    	$size = Size::all();

    	// dd($cart);
    	return view('home.cart_items.index',compact('cart','colors','size','goods'));
    }


    public function delete($id)
    {
    	$cart = Cart_items::destroy($id);

    	if($cart){
    		return back()->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');
    	}
    }
}
