<?php

namespace App\Http\Controllers;

use App\Cates;
use App\Good;
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
      $good = Good::all();
      
      // dd($good3);
      $goods = Good::orderBy('id','desc');
    	return view('home.jicheng.touti',compact('link','setting','cates','goods','good'));
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
        'username' => 'required|regex:/^\w{2,12}$/',
        ]);          
        


      	$user = new User;
      	$user -> username = $request->username;
        $user -> password = Hash::make($request ->password);
        $user -> name = $request->name;
        $user -> image = url('http://www.imeitou.com/uploads/allimg/180913/3-1P913113U6-lp.jpg');
      	if($user -> save()){
            return redirect('/login')->with('success','註冊成功,请登录');
        }else{
            return back()->with('error','註冊失败,请重试');
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
    public function people($id)
    {
      $link = Link::all();
      $setting = Setting::all();
      $user = User::findOrFail($id);
      $cates = Cates::all();
      return view('home.jicheng.people',compact('link','setting','user','cates'));
    }

    /**
     * 个人中心增加
     */
    
    public function z(Request $request)
    {
      $id = Session::get('id');

      $user =  User::findOrFail($id);

      $user->name = $request-> name;
      $user->phone = $request-> phone;
      $user->sex = $request-> sex;
      // $user->sheng = $request-> sheng;
      // $user->shi = $request-> shi;
      // $user->xian = $request-> xian;
      if ($request -> hasFile('image')) {
            $user -> image = '/'.$request -> image -> store('uploads/'.date('Ymd'));
        }

      if($user -> save()){
            session(['username'=>$user->username, 'id'=>$user->id,'password'=>$user->password,'image'=>$user->image,'name'=>$user->name,]);
            // return redirect('/home/people/')->with('success','添加成功');
            return back()->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    public function site()
    {
      $link = Link::all();
      $setting = Setting::all();
      $user = User::all();
      $cates = Cates::all();
      $site = Site::all();
      return view('home.jicheng.site',compact('link','setting','user','site','cates'));
    }

    public function dosite(Request $request)
    {

      $site = new Site;

      $site->name = $request-> name;
      $site->address = $request-> address;
      $site->call = $request-> call;
      $site->mail = $request-> mail;
      $site->sheng = $request-> sheng;
      $site->shi = $request-> shi;
      $site->qu = $request-> qu;
      $site->user_id = Session::get('id');
      if($site -> save()){
            return redirect('/home/site')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    public function delsite($id)
    {
       $site = Site::findOrFail($id);

        if($site -> delete()){
            return back()->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }   
    }

    public function terms()
    {
      return view('home.jicheng.terms');
    }
}
