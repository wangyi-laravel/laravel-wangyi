@extends('layouts.admin') 
@section('title','商品属性列表') 
@section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
        </div>
        
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span><a href="{{route('attr.create')}}" style="color:white"> 新增</a></button>
	                    <button class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> <a href="" style="color:white">删除</a></button>
                    </div>
                </div>
            </div>
            <!-- 搜索栏 start-->
            <div class="am-u-sm-12 am-u-md-3">
            	<form action="{{route('attr.index')}}" method="get">
	                <div class="am-input-group am-input-group-sm">
	                    <input type="text" name="keywords" class="am-form-field" placeholder="{{request()->keywords}}">
	                    <span class="am-input-group-btn">
				            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
				        </span>
	                </div>
	            </form>
            </div>
            <!-- 搜索栏 end -->
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
                                <th class="table-author am-hide-sm-only">商品属性名</th>
                                <th class="table-author am-hide-sm-only">分类名</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($attrs as $v)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{$v['id']}}</td>
                                <td class="am-hide-sm-only">{{$v['name']}}</td>
                                <td class="am-hide-sm-only">{{$v->cate['name']}}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="/attr/{{$v['id']}}/edit">编辑</a></button>
                                            </form>
                                            <form action="/attr/{{$v['id']}}" method="post">
                                            	{{csrf_field()}}{{method_field('delete')}}
                                            	<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        	</form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="am-cf">
                        <div class="am-fr">

                        </div>
                    </div>
                    <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection