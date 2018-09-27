@extends('layouts.admin') @section('title','站内信') @section('content')
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">
.content {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    width: 97%;
}
</style>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
        </div>
        <a href="/admin/recycle">
            <div style="float: right; font-size: 20px; color: #32C5D2;">
                <span class="glyphicon glyphicon-piggy-bank"></span><b>回收站</b>
            </div>
        </a>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <!-- <a href="/message/create">
                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/message" method="get">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" name="keywords" class="am-form-field" placeholder="{{request()->keywords}}">
                        <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                      </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <tr>

                            <td style="width:3%">id</td>
                            <td style="width:35%">消息内容</td>
                            <td style="width:8%">发送人id</td>
                            <td style="width:10%">发送人昵称</td>
                            <td style="width:8%">接收人id</td>
                            <td style="width:14%">发送时间</td>

                            <td>&nbsp;&nbsp;操作</td>
                        </tr>
                        @foreach($recycles as $v)
                        <tr>

                            <td style="width:3%">{{$v['id']}}</td>
                            <td style="width:40%">
                                @if($v['catch_id'] == Session::get('id'))
                                <a href="/back/{{$v['id']}}/edit">
                                @else
                                <a href="/message/{{$v['id']}}/edit">
                                @endif
                                    <div class="content">{{$v['content']}}</div>
                                </a>
                            </td>
                            <td style="width:8%">{{$v['send_id']}}</td>
                            <td style="width:10%">{{$v['send_name']}}</td>
                            <td style="width:10%" class="a">
                                @if($v['catch_id'] == 0)
                                    全员消息
                                @else
                                    {{$v['catch_id']}}
                                @endif
                            </td>
                            <td style="width:14%">{{$v['created_at']}}</td>

                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        @if($v['catch_id'] == Session::get('id'))
                                        <a style="float:left; width: 62.5px" href="/back/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 回复</a>
                                        @else
                                        <a style="float:left; width: 62.5px" href="/message/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        @endif
                                        <form style="float:left; width: 62.5px" action="/message/{{$v['id']}}" method="post">
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                            {{csrf_field('post')}} {{method_field('delete')}}
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <style>
                .pagination {
                    padding-left: 0;
                    margin: 1.5rem 0;
                    list-style: none;
                    color: #999;
                    text-align: left;
                    padding: 0;
                }

                .pagination li {
                    display: inline-block;
                }

                .pagination li a,
                .pagination li span {
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

                .pagination .active span {
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
                        {{ $messages->appends(request()->all())->links() }}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection