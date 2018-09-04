@extends('layouts.admin') 
@section('title') 
属性名修改 
@endsection 
@section('title','属性名修改') 
@section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 属性名修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/attrval/{{$attrval['id']}}">
                    
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">属性名</label>
                        <div class="am-form-group">
                        
                        <div class="am-u-sm-9">
                            @foreach($attrs as $v)
                            <label style="font-size: 14px;font-weight: normal;margin-right: 10px;"><input type="radio" @if($attrval->attr_id == $v['id']) checked @endif name="attr_id" value="{{$v['id']}}">{{$v['name']}}</label>
                                
                            @endforeach
                        </div>
                    </div>
                        <!-- <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="attr_id" style="display: none;">
                                @foreach($attrs as $v)
                                <option value="{{$v['id']}}"  
                                    @if($v['id'] == $attrval['attr_id']) 
                                        selected 
                                    @endif
                                >{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div> -->
                    </div>   

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">属性值<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$attrval['val']}}" name="val" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>                
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>

                <script>
                    var ue = UE.getEditor('editor');
                </script>
            </div>
        </div>
    </div>
</div>
@endsection