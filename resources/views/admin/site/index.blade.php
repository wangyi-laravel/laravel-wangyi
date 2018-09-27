@extends('layouts.admin') @section('title','用户列表') @section('content')
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
                        <a href="/site/create"><button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button></a>
                       <a href=""> <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button></a>
                    </div>
                </div>
            </div>
            
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/site" method="get">
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
                                <th class="table-title">联系人</th>
                                <th class="table-title">联系电话</th>
                                <th class="table-title">所在省</th>
                                <th class="table-title">所在市</th>
                                <th class="table-title">所在区</th>
                                <th class="table-title">详细地址</th>
                                <th class="table-title">所属用户</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sites as $v)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>

                                <td>{{$v['id']}}</td>
                                <td class="am-hide-sm-only">{{$v['name']}}</td>
                                <td class="am-hide-sm-only">{{$v['call']}}</td>
                                <td class="am-hide-sm-only">{{$v['sheng']}}</td>
                                <td class="am-hide-sm-only">{{$v['shi']}}</td>
                                <td class="am-hide-sm-only">{{$v['qu']}}</td>
                                <td class="am-hide-sm-only">{{$v['address']}}</td>
                                <td class="am-hide-sm-only">
                                @foreach($users as $u)
                                @if($v['user_id'] == $u['id'])
                                    {{$u['name']}}
                                @endif
                                @endforeach
                                </td>
                                
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                                <a style="float:left" href="/site/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>

                                            </form>
                                           <form style="float:left"  action="/site/{{$v['id']}}" method="post">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                {{csrf_field('post')}}
                                                {{method_field('delete')}}
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <style>
                        .pagination{
                            padding-left: 0;
                            margin: 1.5rem 0;
                            list-style: none;
                            color: #999;
                            text-align: left;
                            padding: 0;
                        }

                        .pagination li{
                            display: inline-block;
                        }

                        .pagination li a, .pagination li span{
                            color: #23abf0;
                            border-radius: 3px;
                            padding: 6px 12px;
                            position: relative;
                            display: block;
                            text-decoration: none;
                            line-height: 1.2;
                            background-color: #fff;
                            border: 1px solid #ddd;
                            border-radius: 0;
                            margin-bottom: 5px;
                            margin-right: 5px;
                        }

                        .pagination .active span{
                            color: #23abf0;
                            border-radius: 3px;
                            padding: 6px 12px;
                            position: relative;
                            display: block;
                            text-decoration: none;
                            line-height: 1.2;
                            background-color: #fff;
                            border: 1px solid #ddd;
                            border-radius: 0;
                            margin-bottom: 5px;
                            margin-right: 5px;
                            background: #23abf0;
                            color: #fff;
                            border: 1px solid #23abf0;
                            padding: 6px 12px;
                        }
                    </style>
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