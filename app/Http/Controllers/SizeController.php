<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // 读取数据库  获取分类数据
        $sizes = Size::orderBy('id','desc')
        ->where('name', 'like','%'.request()->keywords.'%')
        ->paginate(10);
        // 解析模板显示用户数据
        return view('admin.size.index', ['sizes'=>$sizes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.size.create');
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
        $sizes = new Size;
        $sizes -> name = $request->name;

        if ($sizes -> save()) {
            return redirect('/size')->with('success', '添加成功');
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
        //
        $sizes = Size::findOrFail($id);
        // 解析模板显示数据
        return view('admin.size.edit',compact('sizes'));
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
        $sizes = Size::findOrFail($id);
        $sizes -> name = $request->name;

        if ($sizes -> save()) {
            return redirect('/size')->with('success', '更新成功');
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
    public function destroy($id)
    {
        //
        $sizes = Size::findOrFail($id);

        if ($sizes->delete()) {
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        } 
    }
}
