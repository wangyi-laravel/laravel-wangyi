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
.username {
    width: 120px;
    white-space: nowrap;/*强制一行显示*/
    overflow:hidden;/*超出部分隐藏*/
    text-overflow: ellipsis;/*最后添加省略号*/

}
</style>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 列表
        </div>
        <a href="/message">
            <div style="float: right; font-size: 20px; color: #32C5D2;">
                <span class="glyphicon glyphicon-piggy-bank"></span><b>消息列表</b>
            </div>
        </a>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                
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
                            <td style="width:10%">接收人昵称</td>
                            <td style="width:10%">发送时间</td>
                            <td style="width:10%">修改时间</td>
                            <td style="width:8%">操作</td>
                        </tr>
                        @foreach($recycle as $v)
                            @if($v['catch_id'] == Session::get('id') || $v['send_id'] == Session::get('id'))
                            <tr>

                                <td style="width:3%">{{$v['id']}}</td>
                                <td style="width:35%">
                                    <a href="/look/{{$v['id']}}/edit">
                                        <div class="content">{{$v['content']}}</div>
                                    </a>
                                </td>
                                <td style="width:8%">{{$v['send_id']}}</td>
                                <td style="width:10%">{{$v['send_name']}}</td>
                                <td style="width:10%" class="a">
                                    @if($v['catch_id'] == 0)
                                        全员消息
                                    @else
                                        @foreach($user as $u)
                                            @if($v['catch_id'] == $u['id'])
                                                <div class="username" style="width:90px">{{$u['username']}}</div>
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td style="width:10%">{{$v['created_at']}}</td>
                                <td style="width:10%">{{$v['updated_at']}}</td>
                                <td style="width:8%">
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <a style="float:left; width: 62.5px" href="/look/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 查看</a>
                                            <form style="float:left; width: 62.5px" action="/del/{{$v['id']}}" method="get">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                {{csrf_field()}} 
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
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
