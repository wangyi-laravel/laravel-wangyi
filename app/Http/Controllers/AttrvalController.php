<?php

namespace App\Http\Controllers;

use App\Attr;
use App\Attrval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttrvalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $attrvals = Attrval::orderBy('id','desc')
            ->where('val','like', '%'.request()->keywords.'%')
            ->where('attr_id','like', '%'.request()->attrwords.'%')
            ->paginate(5);

        return view('admin.attrval.index', compact('attrvals','attr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $attrs = Attr::all();
        return view('admin.attrval.create',compact('attrs'));
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
        $attrval = new Attrval;

        $attrval -> val = $request->val;
        $attrval -> attr_id = $request->attr_id;
        // dd($attrval);


        if($attrval -> save()){


            /*
            // 添加入中间表
            try{              
                DB::table('attr_attrval')->insert([
                    'attr_id'=>$attrval->id, 
                    'attrval_id' => $request->attr_id,
                ]);
                
                return redirect('/attrval')->with('success','添加成功');
            }catch(\Exception $e){
                return back()->with('error','添加失败!!!');
            }*/

            return redirect('/attrval')->with('success', '添加成功');
        }else{
            return back()->with('error','添加失败...');
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
        $attrval = Attrval::findOrFail($id);
        $attrs = Attr::all();
        return view('admin.attrval.edit',compact('attrs','attrval'));
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
        $attrval = Attrval::findOrFail($id);
        
        $attrval -> val = $request -> val;
        $attrval -> attr_id = $request -> attr_id;

        if($attrval -> save()){
            return redirect('/attrval')->with('success', '更新成功');
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
        //
        $attrval = Attrval::findOrFail($id);

        if($attrval -> delete()){
            return redirect('/attrval')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
