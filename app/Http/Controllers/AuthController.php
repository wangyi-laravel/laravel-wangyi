<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //
    public function weibo() {
        return Socialite::with('weibo')->redirect();
        // return \Socialite::with('weibo')->scopes(array('email'))->redirect();
    }
 
 
    public function callback() {
        $oauthUser = \Socialite::with('weibo')->user();
        // dd($oauthUser->expiresIn);
 		
        // dd($oauthUser->avatar);
 		$user = new User;
 		$res = $user -> where('username','=',$oauthUser->id)->get()->first();
 		// dd($res);

 		if ($res) {
 			session(['username'=>$res->username, 'id'=>$res->id,'password'=>$res->password,'image'=>$res->image]);
 			return redirect('/')->with('success','登录成功');
 		} else {
 			$user -> username = $oauthUser->id;
	 		$user -> name = $oauthUser -> nickname;
	 		$user -> image = $oauthUser -> avatar;
 			$user -> password = Hash::make($oauthUser->expiresIn);

 			if($user->save()){
 				session(['username'=>$user->username, 'id'=>$user->id,'password'=>$user->password,'image'=>$user->image]);
 				return redirect('/')->with('success','登录成功');
 			}
 		}
 		



 		
    }
}
