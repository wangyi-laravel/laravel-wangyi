<?php

namespace App\Http\Controllers;

use App\Attr;
use App\Cates;
use Illuminate\Http\Request;

class AttrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attrs = Attr::orderby('id','desc')
        ->where('name','like','%'.request()->keywords.'%')
        ->get();
        return view('admin.attr.index',compact('attrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cates = Cates::all();
        return view('admin.attr.create',compact('cates'));
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
        $attr = new Attr;
        $attr->name = $request->name;
        $attr->cate_id = $request->cate_id;
        if ($attr -> save()) {
            return redirect('/attr') -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败');
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
        $attr = Attr::find($id); 
        return view('admin.attr.edit',compact('attr'));
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
        $attr = Attr::find($id);
        $attr->name = $request->name;
        if ($attr->save()) {
            return redirect('/attr')->with('success','修改成功');
        }else{
            return back()->with('success','修改失败');
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
        $attr = Attr::find($id);
        $attr->delete();

        if ($attr) {
            return redirect('/attr')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
