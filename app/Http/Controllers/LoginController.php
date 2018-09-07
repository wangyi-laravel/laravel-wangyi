<?php

namespace App\Http\Controllers;

use App\User;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Http\Concerns\flash;
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
		return view('home.login');
	}

	/**
	 * 登陆操作
	 */
	public function dologin(Request $request)
	{
		//获取用户的数据
		$user = User::where('username', $request->username)->first();
		dd($user);
		$res = $request->num;

		$php = Session::get('milkcaptcha');

		if(!$user){
			return back()->with('error','登陆失败!');
		}

		if ($res != $php) {
			return back()->with('error','验证码错误');
		}
		//校验密码
		if(Hash::check($request->password, $user->password)){
			//写入session
			session(['username'=>$user->username, 'id'=>$user->id]);
			return redirect('/')->with('success','登陆成功');
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
		return redirect('/home/login')->with('success','退出成功');
	}

	/**
	 * 验证码
	 */
	public function captcha()
    {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::put(['milkcaptcha' => $phrase]); //存储验证码
        // ob_clean();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
}
