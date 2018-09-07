<?php

namespace App\Http\Controllers;


use App\Link;
use Illuminate\Http\Request;
use Illuminate\Pagination\links;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $link = Link::all();
        //解析模板  显示用户数据
        return view('admin.link.index',['link'=>$link]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.link.create');
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
        // dd($request);

        $link = new Link;

        $link->name = $request ->name;

        $link->url = $request ->url;

        $link->order = $request ->order;

        if($link -> save()){
            return redirect('/link')->with('success','添加成功');
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
        $username =  DB::table('links')->where('id',$id)->get();
        // dd($username);
        return view('admin.link.edit',['username'=>$username]);
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
        $username = $request -> username;


        $update = DB::table('links')->where('id',$id)->update(['name'=>$username]);
        
        if($update){
            return redirect('/link')->with('success','修改用户成功成功');
        }else{
            return back()->with('error','修改失败');
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
        $username = DB::table('links')->where('id',$id)->value('name');
        $user = DB::table('links')->where('id',$id)->delete();
        if($user){
            return redirect('/link')->with('success','删除'.$username.'成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}

