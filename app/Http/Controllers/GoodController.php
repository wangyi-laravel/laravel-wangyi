<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 读取数据库  获取商品数据
        $goods = Good::orderBy('id','desc')
        ->where('title', 'like','%'.request()->keywords.'%')
        ->paginate(10);
        // 解析模板显示用户数据
        return view('admin.good.index', ['goods'=>$goods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.good.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //插入数据
        $goods = new Good;

        $goods -> title = $request -> title;
        $goods -> image = $request -> image;
        $goods -> miaoshu = $request -> miaoshu;
        $goods -> price = $request -> price;
        $goods -> content = $request -> content;
        $goods -> jifen = $request -> jifen;
        $goods -> number = $request -> number;

        //文件上传
        //检测是否有文件上传
        if ($request->hasFile('image')) {
            $goods->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        //插入
        if ($goods -> save()) {
            return redirect('/good')->with('success', '添加成功');
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
        // 获取商品的信息
        $good = Good::findOrFail($id);
        // 解析模板显示数据
        return view('admin.good.edit',['good'=>$good]);
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
        //插入数据
        $goods = Good::findOrFail($id);

        $goods -> title = $request -> title;
        $goods -> image = $request -> image;
        $goods -> miaoshu = $request -> miaoshu;
        $goods -> price = $request -> price;
        $goods -> content = $request -> content;
        $goods -> jifen = $request -> jifen;
        $goods -> number = $request -> number;

        //文件上传
        //检测是否有文件上传
        if ($request->hasFile('image')) {
            $goods->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        //插入
        if ($goods -> save()) {
            return redirect('/good')->with('success', '更新成功');
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
        $goods = Good::findOrFail($id);

        if ($goods->delete()) {
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        } 
    }
}
