@extends('layouts.admin') @section('title') 订单管理 @endsection @section('title','订单管理') @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
        </div>
        <div class="tpl-portlet-input tpl-fz-ml">
            <div class="portlet-input input-small input-inline">
                <div class="input-icon right">
                    <i class="am-icon-search"></i>
                    <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
            </div>
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/order/create">
                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                        </a>
                        <a href="">
                            <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/order" method="get">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                        <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                      </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                            <tr>
                                <th class="table-check">
                                    <input type="checkbox" class="tpl-table-fz-check">
                                </th>
                                <th class="table-id">ID</th>
                                <th class="table-title">商品标题</th>
                                <th class="table-set">图片</th>
                                <th class="table-set">单价</th>
                                <th class="table-set">总价</th>
                                <th class="table-set">颜色/尺寸</th>
                                <th class="table-set">数量</th>
                                <th class="table-set">用户ID</th>
                                <th class="table-set">订单号</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($orders as $v)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td></td>
                                <td class="am-hide-sm-only">{{$v['title']}}</td>
                                <td class="am-hide-sm-only"></td>
                                <td class="am-hide-sm-only"></td>
                                <td class="am-hide-sm-only">
                                </td>
                                <td class="am-hide-sm-only"></td>
                                <td class="am-hide-sm-only">
                                </td>
                                <td class="am-hide-sm-only">
                                </td>
                                <td class="am-hide-sm-only"></td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a style="float:left" href="/order/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                </form>
                <form style="float:left" action="/order/" method="post">
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                    {{csrf_field('post')}} {{method_field('delete')}}
                </form>
                @endforeach
                </div>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
                <div class="am-cf">
                    <div class="am-fr">
                        <!--  -->
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection