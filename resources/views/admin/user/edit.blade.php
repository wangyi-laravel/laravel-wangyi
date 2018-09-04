@extends('layouts.admin') 
@section('title') 用户添加 @endsection 
@section('title','用户添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" action="/user/{{$user->id}}" method="post"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">username</span></label>
                        <div class="am-u-sm-9" >
                            <input type="text" name="username" class="tpl-form-input" id="user-name" value="{{$user ->username}}">
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">权限 <span class="tpl-form-line-small-title">password</span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" @if($user->weight == 1) checked @endif name="weight" value="1">管理员
                            <input type="radio" @if($user->weight == 2) checked @endif name="weight" value="2">普通用户
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">昵称 <span class="tpl-form-line-small-title">name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" value="{{$user -> name}}">
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title">phone</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="phone" class="tpl-form-input" id="user-name" value="{{$user -> phone}}">
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title">image</span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" class="tpl-form-input" id="user-name" value="{{$user -> image}}">
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">性别 <span class="tpl-form-line-small-title">sex</span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" @if($user->sex == 0) checked @endif name="sex" value="0">男
                            <input type="radio" @if($user->sex == 1) checked @endif name="sex" value="1">女
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title">site</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="site" class="tpl-form-input" id="user-name" value="{{$user -> site}}">
                            <small></small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">积分 <span class="tpl-form-line-small-title">jifen</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="jifen" class="tpl-form-input" id="user-name" value="{{$user -> jifen}}">
                            <small></small>
                        </div>
                    </div>
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