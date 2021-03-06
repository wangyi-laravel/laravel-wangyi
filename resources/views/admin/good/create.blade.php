@extends('layouts.admin') @section('title') 商品添加 @endsection @section('title', '商品添加') @section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/jquery-3.3.1.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 商品添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/good" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">商品分类</label>
                        <div class="am-u-sm-9">
                            @foreach($cates as $a)
                                @if($cate == $a['id'])
                                <input type="hidden" name="cate_id" value="{{$a['id']}}">{{$a['name']}}
                                @endif
                            @endforeach
                            @foreach($cates as $c)
                                @if($c['id'] == $cate)
                                <input type="hidden" name="cates_id" value="{{$c['parent_id']}}">
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">颜色<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            @foreach($colors as $v)
                            <label style="font-size: 14px;font-weight: normal;margin-right: 10px;"><input type="checkbox" name="color_id[]" value="{{$v['id']}}">{{$v['name']}}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">尺码<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            @foreach($sizes as $v)
                            <label style="font-size: 14px;font-weight: normal;margin-right: 10px;"><input type="checkbox" name="size_id[]" value="{{$v['id']}}">{{$v['name']}}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片 </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加商品图片</button>
                                <input id="doc-form-file" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">商品描述</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="miaoshu" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="price" class="tpl-form-input" id="user-name" value="￥">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">商品详情</label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">积分 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="jifen" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">数量 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="number" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    {{csrf_field()}}
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