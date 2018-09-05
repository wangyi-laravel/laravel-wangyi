@extends('layouts.admin') 
@section('title') 分类添加 @endsection 
@section('title','分类添加') 

@section('content')
<hr>
<style>
    .tpl-portlet-components{
        height:800px;
    }
</style>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 分类添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/cates">
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">一级分类名 </label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="parent_id" style="display: none;">
                                <option value="0">添加一级分类</option>
                                @foreach($cates as $v)
                                @if($v['parent_id']==0)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>  
                                @endif                              
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">二级分类名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection