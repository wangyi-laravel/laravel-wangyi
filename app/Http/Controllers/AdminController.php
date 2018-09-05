<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
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
		$setting -> email = $request->email;
		$setting -> phone = $request->phone;
		$setting -> address = $request->address;
		

		if($setting->save()){
			return back()->with('success','设置成功');
		}else{
			return back()->with('error','设置失败!!');
		}
		
	}
}
