@extends('layouts.admin') @section('title') 订单管理 @endsection @section('title','订单管理') @section('content')
<style type="text/css">
	.qq{
		width:200px;
	}
</style>
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
                                <td class="am-hide-sm-only  qq">{{$v['title']}}</td>
                                <td class="am-hide-sm-only">
                                	<img src="{{$v['image']}}" width="50">
                            	</td>
                                <td class="am-hide-sm-only">{{$v['price']}}</td>
                                <td class="am-hide-sm-only" style="color:red;font-size:12px">{{$v['prices']}}</td>
                                <td class="am-hide-sm-only">
                                 颜色:{{$v['color']}}<br>
                           		 尺码:{{$v['size']}}
                        		</td>
                                <td class="am-hide-sm-only">{{$v['amount']}}</td>
                                <td class="am-hide-sm-only">{{$v['user_id']}}</td>
                                <td class="am-hide-sm-only">{{$v['cart_id']}}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                    	
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a style="float:left" href="/order/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                </form>
                <form style="float:left" action="/orders/{{$v['id']}}" method="post">
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                    {{csrf_field()}}
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