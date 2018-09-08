<?php

namespace App\Http\Controllers;

use App\Link;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Shouyecontroller extends Controller
{
    //前台显示页面
    public function show()
    {
      $link = Link::all();
      $setting = Setting::all();
    	return view('home.jicheng.touti',compact('link','setting'));
    }

    //前台注册页面
    public function register()
    {
        $link = Link::all();
      $setting = Setting::all();

      	return view('home.jicheng.register',compact('link','setting'));
    }  

    //执行注册
    public function store(Request $request)
    {

      	$user = new User;

      	$user -> username = $request->username;
        $user-> password = Hash::make($request ->password);
        $user -> name = $request->name;

      	if($user -> save()){
            return redirect('/admin/login')->with('success','註冊成功');
        }else{
            return back()->with('error','註冊失败');
        }
      	
    }  

    /**
     * 退出登錄
     */
    public function logout(Request $request)
    {
      $request->session()->flush();
      return redirect('/')->with('success','退出成功');
    }
}
