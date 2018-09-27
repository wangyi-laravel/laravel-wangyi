<?php

namespace App\Http\Controllers;

use App\Site;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sites = Site::all();
        $users = User::all();
        // $users -> name = $request -> name;
        // dd($users);
        return view('admin.site.index',compact('sites','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $site = Site::all();
        return view('admin.site.create',compact('site'));
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
        $site = new Site;

        $site -> name = $request->name;
        $site -> call = $request->call;
        $site -> sheng = $request->sheng;
        $site -> shi = $request->shi;
        $site -> qu = $request->qu;
        $site -> address = $request->address;
        $site -> user_id = session('id');
        if($site -> save()){

            return redirect('/site')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');;
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
        $site = Site::findOrFail($id);
        return view('admin.site.edit',compact('site'));
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
        $site = Site::findOrFail($id);

        $site -> name = $request->name;
        $site -> call = $request->call;
        $site -> sheng = $request->sheng;
        $site -> shi = $request->shi;
        $site -> qu = $request->qu;
        $site -> address = $request->address;

        if($site -> save()){
            return redirect('/site')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');;
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
        $username = DB::table('sites')->where('id',$id)->value('name');
        $site = Site::findOrFail($id);


        if($site->delete()) {
            return redirect('/site')->with('success','删除'.$username.'成功');
        }else{
            return back()->with('error','删除'.$username.'失败');
        }
    }
}
