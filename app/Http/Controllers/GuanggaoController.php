<?php

namespace App\Http\Controllers;

use App\Guanggao;
use Illuminate\Http\Request;

class GuanggaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库,把值放到表单中
        
         $gao = guanggao::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->get();
         return view('admin.guanggao.index',['gao'=>$gao]);
        //return '555';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $gao = Guanggao::all();
        return view('admin.guanggao.create', ['gao'=>$gao] );
       
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
        $gao = new Guanggao;

        $gao -> name = $request -> name;
        $gao -> image = $request -> image;
        $gao -> site = $request -> site;
        $gao -> jieshao = $request -> jieshao;

        //文件上传
        //检测是否有文件上传
        if ($request->hasFile('image')) {
            $gao->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        //插入
        if ($gao -> save()) {
            return redirect('/guanggao')->with('success', '添加成功');
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
        $gao = Guanggao::findOrFail($id);

        return view('admin.guanggao.edit', ['gao'=>$gao]);

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
        //插入数据
        $gao = Guanggao::findOrFail($id);
        $gao -> name = $request-> name;
        $gao -> image = $request -> image;
        $gao -> site = $request -> site;
        $gao -> jieshao = $request -> jieshao;
        // $gao -> parent_id = $request->parent_id;

        //文件上传
        //检测是否有文件上传
        if ($request->hasFile('image')) {
            $gao->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        //插入
        if ($gao -> save()) {
            return redirect('/guanggao')->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
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
        //删除
        $gao = Guanggao::findOrFail($id);

        if($gao -> delete()){
            return redirect('/guanggao')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
