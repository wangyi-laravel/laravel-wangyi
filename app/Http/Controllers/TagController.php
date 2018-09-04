<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //读取数据库  读取用户数据
        $tags = Tag::orderBy('id','desc')
        ->where('name','like','%'.request()->keywords.'%')
        ->paginate(10);
        //解析模板  显示用户数据
        return view('admin.tag.index',['tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tag.create');
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
        $tag = new Tag;

        $tag->name = $request ->username;

        if($tag -> save()){
            return redirect('/tag')->with('success','添加成功');
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
        $username =  DB::table('tags')->where('id',$id)->value('name');
        return view('/admin/tag/edit',['id'=>$id,'username'=>$username]);
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

        $update = DB::table('tags')->where('id',$id)->update(['name'=>$username]);
        
        if($update){
            return redirect('/tag')->with('success','修改用户成功成功');
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
        $tags = DB::table('tags')->where('id',$id)->delete();
        if($tags){
            return redirect('/tag')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
