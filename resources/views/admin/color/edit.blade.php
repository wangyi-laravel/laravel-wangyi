@extends('layouts.admin') 
@section('title') 颜色修改 @endsection 
@section('title','颜色修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 颜色修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" action="/color/{{$colors['id']}}" method="post" >
                    {{method_field('PUT')}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">颜色名 <span class="tpl-form-line-small-title">name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" value="{{$colors['name']}}">
                            <small></small>
                        </div>
                    </div>
					{{csrf_field('post')}}
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