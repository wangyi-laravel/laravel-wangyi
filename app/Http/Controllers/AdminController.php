<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * 后台首页
     */
    public function index()
    {
    	return view('/admin');
    }


    /**
     * 网站设置
     */
    public function set()
    {
    	$setting = Setting::first();
    	return view('admin.setting',compact('setting'));
    }

    /**
	 * 保存设置
	 */
	public function update(Request $request)
	{
		$setting = Setting::first();

		if(!$setting){
			$setting = new Setting;
		}

		$setting -> author = $request->author;
		$setting -> jianjie = $request->jianjie;
		$setting -> phone = $request->phone;
		$setting -> address = $request->address;
		

		if($setting->save()){
			return back()->with('success','设置成功');
		}else{
			return back()->with('error','设置失败!!');
		}
	}

	/**
     * 管理员登录
     */
    public function login() 
    {
    	return view('admin.login');
    }

    /**
	 * 登陆操作
	 */
	public function dologin(Request $request)
	{
		//获取用户的数据
		$user = User::where('username','=',$request->username)->first();
		
		$weight = $user->weight;


		//判断登录用户有没有管理员权限
		if ($weight != 1) {

			return back()->with('error','您没有权限,请先联系管理员');
		}

 		//判断在不在用户表里
		if(!$user){
			return back()->with('error','登陆失败!');
		}

		//校验密码
		if(Hash::check($request->password, $user->password)){
			//写入session
			session(['username'=>$user->username, 'id'=>$user->id,'password'=>$user->password,'weight'=>$user->weight,'name'=>$user->name]);
			return redirect('/admin')->with('success','登陆成功');
		}else{
			return back()->with('error','登陆失败!');
		}
	}
}
