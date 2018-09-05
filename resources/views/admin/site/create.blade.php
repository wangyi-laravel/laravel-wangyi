@extends('layouts.admin') @section('title','用户添加') @section('content')
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
                        <label for="user-name" class="am-u-sm-3 am-form-label">联系人 <span class="tpl-form-line-small-title">username</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="请填写标题文字6-20位字母数字下划线">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title">call</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="phone" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">收货地址 <span class="tpl-form-line-small-title">phone</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="phone" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            <small></small>
                        </div>
                    </div>
                    <div>
                    <script type="text/javascript">
                    $(function() {

                        //模拟城市-无联动/无搜索
                        var selector = $('#city-picker-selector').cityPicker({
                            dataJson: cityData,
                            renderMode: true,
                            search: false,
                            linkage: false
                        })
                        $('#city-picker-selector').on('choose-province.citypicker', function(event, tagert, storage) {
                            console.log(storage);
                        });

                        //设置城市
                        selector.setCityVal([{
                            'id': '110000',
                            'name': '北京市'
                        }, {
                            'id': '110100',
                            'name': '北京市'
                        }, {
                            'id': '110108',
                            'name': '海淀区'
                        }]);

                        //模拟城市-联动/搜索
                        $('#city-picker-search').cityPicker({
                            dataJson: cityData,
                            renderMode: true,
                            search: true,
                            linkage: true
                        });

                        //原生城市-无联动
                        var select = $('.city-picker-select').cityPicker({
                            dataJson: cityData,
                            renderMode: false,
                            linkage: false
                        });

                        //设置城市
                        select.setCityVal([{
                            'id': '140000',
                            'name': '山西省'
                        }, {
                            'id': '140100',
                            'name': '太原市'
                        }, {
                            'id': '140105',
                            'name': '小店区'
                        }]);
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