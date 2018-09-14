<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        // ->where('title','like','%'.request()->keywords.'%')
        // ->paginate(10);
        //解析模板  显示用户数据
        // dd($users);
        return view('admin.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $user = new User;

        $user -> username = $request->username;
        $user-> password = Hash::make($request ->password);
        $user -> name = $request->name;
        $user -> phone = $request->phone;
        $user -> sex = $request->sex;
        $user -> weight = $request->weight;
        // dd($request->post());
        if ($request -> hasFile('image')) {

            $user -> image = '/'.$request -> image -> store('uploads/user/'.date('Ymd'));

        }
        // dd($user -> all());
        if($user -> save()){
            session(['image'=>$user->image]);
            return redirect('/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        // dump($user->username);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::findOrFail($id);
        
        $user -> username = $request->username;
        $user -> name = $request->name;
        $user -> phone = $request->phone;
        $user -> sex = $request->sex;
        $user -> weight = $request->weight;
        // $user -> site = $request->site;
        if ($request -> hasFile('image')) {
            $user -> image = '/'.$request -> image -> store('uploads/user/'.date('Ymd'));
        }
        if($user -> save()){
            return redirect('/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $username = DB::table('users')->where('id',$id)->value('name');
        $user = User::findOrFail($id);


        if($user->delete()) {
            return redirect('/user')->with('success','删除'.$username.'成功');
        }else{
            return back()->with('error','删除'.$username.'失败');
        }
    }
}
