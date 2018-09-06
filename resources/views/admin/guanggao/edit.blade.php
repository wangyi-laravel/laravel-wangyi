@extends('layouts.admin') @section('title','广告修改') @section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 广告修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" action="/guanggao" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">广告名称 <span class="tpl-form-line-small-title">name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" value="{{$gao->name}}" class="tpl-form-input" id="user-name" placeholder="请填写广告名称">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">连接地址<span class="tpl-form-line-small-title">site</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="site" value="{{$gao->site}}"class="tpl-form-input" id="user-name" placeholder="请输入有效跳转连接地址">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">详细介绍 <span class="tpl-form-line-small-title">jieshao</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="jieshao" value="{{$gao->jieshao}}"class="tpl-form-input" id="user-name" placeholder="给广告备注个详情介绍">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">图片<span class="tpl-form-line-small-title">image</span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" value="{{$gao->image}}"class="tpl-form-input" id="user-name" ">
                            <img src="{{$gao->image}}"  width="50px">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group ">
                        <div class="am-u-sm-9 am-u-sm-push-3 ">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection