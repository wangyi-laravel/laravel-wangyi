<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
	{
		return view('admin');
	}

	/**
	 * 登陆页面
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
		$user = User::where('username', $request->username)->first();

		if(!$user){
			return back()->with('error','登陆失败!');
		}

		//校验密码
		if(Hash::check($request->password, $user->password)){
			//写入session
			session(['username'=>$user->username, 'id'=>$user->id]);
			return redirect('/admin')->with('success','登陆成功');
		}else{
			return back()->with('error','登陆失败!');
		}
	}

	/**
	 * 退出登陆
	 */
	public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect('/admin/login')->with('success','退出成功');
	}
}
