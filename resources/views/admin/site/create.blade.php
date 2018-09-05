@extends('layouts.admin') @section('title','地址添加') @section('content')
<hr>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/sj/js/jquery.cxselect.js"></script>

<style type="text/css">
	#address select{
		width:20%;
		float:left;
		border:solid 1px #ddd;
		margin-right:10px;
	}
</style>
<div class="tpl-portlet-components" id="address">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 地址添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" action="/site" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">联系人 <span class="tpl-form-line-small-title">username</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="请填写标题文字6-20位字母数字下划线">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title">call</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="call" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">收货地址 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9" id="city_china">
                        	<select class="province" name="sheng"></select>
	                        <select class="city" name="shi"></select>
	                        <select class="area" name="qu"></select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">详细地址 <span class="tpl-form-line-small-title">address</span></label>
                        <div class="am-u-sm-9">
                            <textarea style="2" name="address"></textarea>
                        </div>
                    </div>
                    <!-- JS -->
                    <script>
                    var urlChina = '/sj/js/cityData.min.json';
                    $.cxSelect.defaults.url = urlChina;
                    $('#city_china').cxSelect({
                        selects: ['province', 'city', 'area']
                    });
                    </script>
                    
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