<?php

namespace App\Http\Controllers;

use App\Cates;
use App\Good;
use App\Link;
use App\Setting;
use App\User;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Http\Concerns\flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

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
		$setting = Setting::all();
		$link = Link::all();
		$cates = Cates::all();
		$goods = Good::all();
		return view('home.login',compact('setting','link','cates','goods'));
	}

	/**
	 * 登陆操作
	 */
	public function dologin(Request $request)
	{
		//获取用户的数据
		$user = User::where('username', $request->username)->first();
		
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
			session(['username'=>$user->username, 'id'=>$user->id,'password'=>$user->password]);
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
		return redirect('/admin/login')->with('success','退出成功');
	}

	/**
	 * 验证码
	 */
	public function captcha()
    {
    	$phraseBuilder = new PhraseBuilder(1,'1');

        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build(150,32);
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::put(['milkcaptcha' => $phrase]); //存储验证码
        // ob_clean();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
}
