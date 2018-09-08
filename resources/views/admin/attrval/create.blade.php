@extends('layouts.admin') 
@section('title') 
属性值添加 
@endsection 
@section('title','属性值添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 属性值添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/attrval">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">属性名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            @foreach($attrs as $v)
                            @if(!empty($v))
                            <label style="font-size: 14px;font-weight: normal;margin-right: 10px;"><input type="radio" name="attr_id" value="{{$v['id']}}">{{$v['name']}}</label>
                            @else
                            <label style="font-size: 14px;font-weight: normal;margin-right: 10px;"><input type="radio" name="attr_id" value="{{$v['id']}}">213</label>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">属性值<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="val" class="tpl-form-input" id="user-name" placeholder="">
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