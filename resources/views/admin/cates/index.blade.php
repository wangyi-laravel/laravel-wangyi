@extends('layouts.admin') @section('title','分类列表') @section('content')
<style>
.tpl-portlet-components {
    height: 800px;
}
</style>
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
        
            
            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                            <tr>
                                <th class="table-check">
                                    <input type="checkbox" class="tpl-table-fz-check">
                                </th>

                                <th class="table-title"><li class="am-dropdown" data-am-dropdown="" data-am-dropdown-toggle="">
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                         一级分类名 (点击显示) <span class="am-badge tpl-badge-success am-round"></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        @foreach($cates as $v) @if($v['parent_id']==0)
                        <li class="tpl-dropdown-content-external">
                            <span class="tpl-color-success">{{$v['name']}}</span>
                            <div class="am-btn-toolbar">
                                <a href="/cates/{{$v['id']}}/edit"> 编辑</a>
                                <form style="float:left" action="/cates/{{$v['id']}}" method="post">
                                    {{method_field('DELETE')}} {{csrf_field()}}
                                    <button> 删除</button>
                                </form>
                        </li>
                        @endif @endforeach
                    </ul>
                </li></th>
                                <th class="table-title"><li class="am-dropdown" data-am-dropdown="" data-am-dropdown-toggle="">
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                         二级分类名 (点击显示) <span class="am-badge tpl-badge-success am-round"></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        @foreach($cates as $v) @if(!$v['parent_id']==0)
                        <li class="tpl-dropdown-content-external">
                            <span class="tpl-color-success">{{$v['name']}}</span>
                            <div class="am-btn-toolbar">
                                <a href="/cates/{{$v['id']}}/edit"> 编辑</a>
                                <form style="float:left" action="/cates/{{$v['id']}}" method="post">
                                    {{method_field('DELETE')}} {{csrf_field()}}
                                    <button> 删除</button>
                                </form>
                        </li>
                        @endif @endforeach
                    </ul>
                </li></th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="tpl-alert"></div>
    </div>
    @endsection