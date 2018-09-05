<?php

namespace App\Http\Controllers;

use App\Cate_1;
use Illuminate\Http\Request;

class Cate_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cates = Cate_1::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->get();
        //
        return view('admin.cate.index', ['cates'=>$cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //·ÖÀà
        return view('admin.cate.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = new Cate_1;

        $cate -> name = $request->name;
        if($cate -> save()){
            return redirect('/cate_1')->with('success', '更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $cate = cate_1::findOrFail($id);

        return view('admin.cate.edit', ['cate'=>$cate]);
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
        $cate = cate_1::findOrFail($id);
        
        $cate -> name = $request -> name;

        if($cate -> save()){
            return redirect('/cate_1')->with('success', '更新成功');
        }else{
            return back()->with('error','更新失败');
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
        
        $cate = cate_1::findOrFail($id);

        if($cate -> delete()){
            return redirect('/cate_1')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
