@extends('layouts.admin') @section('title','用户添加') @section('content')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/sj/js/jquery.cxselect.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <form class="am-form tpl-form-line-form" action="/user" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">username</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="请填写标题文字6-20位字母数字下划线">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title">password</span></label>
                        <div class="am-u-sm-9">
                            <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">权限 <span class="tpl-form-line-small-title">password</span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="weight" value="1">管理员
                            <input type="radio" name="weight" value="2">普通用户
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">昵称 <span class="tpl-form-line-small-title">name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title">phone</span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="phone" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title">image</span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">性别 <span class="tpl-form-line-small-title">sex</span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="sex" value="0">男
                            <input type="radio" name="sex" value="1">女
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title">site</span></label>
                        <div class="am-u-sm-9" id="city_china">
                            <select class="province" name="sheng">
                            </select>
                            <select class="city" name="shi">
                            </select>
                            <select class="area" name="qu">
                            </select>
                        </div>
                        <script>
                    var urlChina = '/sj/js/cityData.min.json';
                    $.cxSelect.defaults.url = urlChina;
                    $('#city_china').cxSelect({
                        selects: ['province', 'city', 'area']
                    });
                    </script>
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