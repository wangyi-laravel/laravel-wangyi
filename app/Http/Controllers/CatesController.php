<?php

namespace App\Http\Controllers;

use App\Cates;
use Illuminate\Http\Request;

class CatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 读取数据库  获取分类数据
        $cates = Cates::orderBy('id','desc')
        ->where('parent_id', 0)
        ->where('name', 'like','%'.request()->keywords.'%')
        ->get();
        // dd($cates);
        // 解析模板显示用户数据
        return view('admin.cates.index', ['cates'=>$cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //读取分类表信息
        $cates = Cates::all();
        return view('admin.cates.create',compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cates = new Cates;
        $cates -> name = $request->name;
        $cates -> parent_id = $request->parent_id;

        if ($cates -> save()) {
            return redirect('/cates')->with('success', '添加成功');
        }else{
            return back()->with('error', '添加失败');
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
        $cates = Cates::findOrFail($id);
        // 解析模板显示数据
        return view('admin.cates.edit',compact('cates'));
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
        $cates = Cates::findOrFail($id);
        $cates -> name = $request->name;
        // $cates -> parent_id = $request->parent_id;

        if ($cates -> save()) {
            return redirect('/cates')->with('success', '更新成功');
        }else{
            return back()->with('error', '更新失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $cates = Cates::findOrFail($id);

        if ($cates->delete()) {
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        } 
    }
}
