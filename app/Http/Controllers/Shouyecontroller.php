<?php

namespace App\Http\Controllers;

use App\Cates;
use App\Link;
use App\Setting;
use App\Site;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class Shouyecontroller extends Controller
{
    //前台显示页面
    public function show()
    {
      $link = Link::all();
      $setting = Setting::all();
      $cates = Cates::all();
    	return view('home.jicheng.touti',compact('link','setting','cates'));
    }

    //前台注册页面
    public function register()
    {
        $link = Link::all();
        $setting = Setting::all();
        $cates = Cates::all();
      	return view('home.jicheng.register',compact('link','setting','cates'));
    }  

    //执行注册
    public function store(Request $request)
    {
        

        $this->validate($request, [
        'username' => 'required|regex:/^[a-zA-Z0-9_-]{6,12}$/',
        ]);          
        


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

    /**
     * 个人中心
     */
    public function people()
    {
      $link = Link::all();
      $setting = Setting::all();
      $user = User::all();
      $site = Site::all();
      $cates = Cates::all();
      return view('home.jicheng.people',compact('link','setting','user','site','cates'));
    }

    /**
     * 个人中心增加
     */
    
    public function z(Request $request)
    {
      // dd($request);  
      $id = Session::get('id');

      $user =  User::find($id);

      $user->name = $request-> name;
      $user->phone = $request-> phone;
      $user->sex = $request-> sex;

      $site = new Site;
      $site->sheng = $request-> sheng;
      $site->shi = $request-> shi;
      $site->qu = $request-> qu;
      $site->address = $request-> address;
      $site->name = $request-> name;
      $site->call = $request-> call;

      if ($request -> hasFile('image')) {
            $user -> image = '/'.$request -> image -> store('uploads/'.date('Ymd'));
        }

       if($user -> save() && $site -> save()){
            return redirect('/home/people')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
}
