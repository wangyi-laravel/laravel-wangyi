@extends('layouts.admin') @section('title','分类列表') @section('content')
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
                        <a href="/cates/create" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
            
            <div class="am-u-sm-12 am-u-md-3">
            	<form action="/cates" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                    <span class="am-input-group-btn">
			            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
			          </span>
                </div>
                </form>
            </div>
        </div>
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-center admin-header-list tpl-header-list">
                <li class="am-dropdown" data-am-dropdown="" data-am-dropdown-toggle="">
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <span class="tpl-color-success">5</span><a href="###">全部</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                        <tr>
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>
                            <th class="table-id">ID</th>
                            <th class="table-title">分类名</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cates as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                {{$v['id']}}
                            </td>
                            
                            <td >
                                {{$v['name']}}
                            </td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/cates/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form style="float:left" action="/cates/{{$v['id']}}" method="post">
                                            @if(!empty($v->child))
                                                <a href="#" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o" ></span> 不能删除</a>
                                            @endif
                                        </form>
                                    </div>
                                    <form  action="/cates/{{$v['id']}}" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" style="float:right;"><span class="am-icon-trash-o" ></span> 强制删除</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @if(!empty($v->child))
                            @foreach($v->child as $b)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                        {{$b['id']}}
                                </td>
                                
                                <td >
                                    |-----{{$b['name']}}
                                </td>
                                
                                
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a href="/cates/{{$b['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                            <form style="float:left" action="/cates/{{$b['id']}}" method="post">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                            </form>
                                            <a href="/good/create?cate_id={{$b['id']}}" class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><input type="hidden" value="{{$b['id']}}"><span class="am-icon-plus"></span> 添加商品</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection