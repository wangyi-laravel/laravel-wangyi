<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $messages = Message::orderBy('id','desc')
        ->where('content', 'like','%'.request()->keywords.'%')
        ->paginate(8);
        return view('admin.znx.message_list',compact('messages','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::orderBy('id')
        ->where('username','like','%'.request()->keywords.'%')
        ->get();
        $count = $users->count();
        // dd($count);
        return view('admin/znx.message',compact('count','users'));
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
        $messages = new Message;
        $messages -> content = $request->content;
        $messages -> send_id = $request->send_id;
        $messages -> send_name = $request->send_name;

        if ($request->catch_id) {
            $messages-> catch_id = $request->catch_id;
        }else{
            $messages->catch_id = 0;
        }

        if ($messages -> save()) {
            return redirect('/message')->with('success', '添加成功');
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

        $messages = Message::findorFail($id);
        $messages -> status = '1'; 
        $messages ->save();
        return view('admin.znx.message_update',compact('messages'));
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
        $messages = Message::findOrFail($id);
        $messages -> content = $request->content;
        $messages -> send_id = $request->send_id;
        $messages -> send_name = $request->send_name;

        $messages -> status = '0'; 

        if ($messages -> save()) {
            return redirect('/message')->with('success', '更新成功');
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
        $messages = Message::findOrFail($id);
        

        if ($messages->delete()) {
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        }
    }

    //管理员回复
    public function back($id)
    {
        $message = Message::findOrFail($id);
        $message -> status = '1'; 
        $message ->save();

        return view('admin.znx.message_back',compact('message'));
    }

    //执行回复
    public function doback(Request $request,$id)
    {
        $messages = Message::findOrFail($id);
        $mess = new Message;
        $mess -> content = $request->content;
        $mess -> send_id = $request->send_id;
        $mess -> send_name = $request->send_name;
        $mess -> content_id = $request->content_id;
        $mess -> catch_id = $request->catch_id;

        if ($mess -> save()) {
            return redirect('/message')->with('success', '回复成功');
        }else{
            return back()->with('error', '回复失败');
        }
    }

    //查看消息
    public function look($id)
    {
        //
        $messages = Message::onlyTrashed()->findorFail($id);
        return view('admin.znx.look',compact('messages'));
    }


    //后台消息回收站
    public function recycle()
    {
        $user = User::all();
        $recycle = Message::onlyTrashed()->get();
        $messages = Message::orderBy('id','desc')
        ->where('content', 'like','%'.request()->keywords.'%')
        ->paginate(5);
        return view('admin.znx.recycle',compact('recycle','messages','user'));
    }

    //恢复消息
    public function restore($id)
    {
        $recycle = Message::onlyTrashed()->findorFail($id);
        $recycle -> status = '1'; 
        $recycle ->save();
        if ($recycle -> restore()) {
            return redirect('/message')->with('success', '恢复成功');
        }else{
            return back()->with('error', '恢复失败');
        }
    }

    //永久删除消息
    public function dele($id)
    {
        $dele = Message::onlyTrashed()->findorFail($id);
        if($dele->forceDelete()) {
            return redirect('/admin/recycle')->with('success', '删除成功');
        }else{
            return back()->with('error', '删除失败');
        }
    }

    //设置为未读
    public function noread(Request $request,$id)
    {
        $messages = Message::findOrFail($id);

        $messages -> status = '0'; 

        if ($messages -> save()) {
            return redirect('/message')->with('success', '设置成功');
        }else{
            return back()->with('error', '设置失败');
        }
    }

    /*--------------------------------------↓前台用户↓-------------------------------------------------*/

    //用户消息列表
    public function list()
    {
        $messages = Message::all();
        return view('home.znx.index',compact('messages'));
    }

    //用户消息回复页
    public function reply($id)
    {
        $message = Message::findOrFail($id);
        $message -> status = '1'; 
        $message ->save();
        return view('home.znx.reply',compact('message'));
    }

    //执行回复
    public function doreply(Request $request,$id)
    {
        $messages = Message::findOrFail($id);
        $mess = new Message;
        $mess -> content = $request->content;
        $mess -> send_id = $request->send_id;
        $mess -> send_name = $request->send_name;
        $mess -> content_id = $request->content_id;
        $mess -> catch_id = $request->catch_id;

        if ($mess -> save()) {
            return redirect('/messages');
        }else{
            return back();
        }
    }

    //用户删除消息
    public function delmessage($id)
    {
        $messages = Message::findOrFail($id);
        // dd($messages);

        if ($messages->delete()) {
            return back();
        }else{
            return back();
        }
    }

}
