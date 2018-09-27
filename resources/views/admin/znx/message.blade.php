@extends('layouts.admin') @section('title','站内信') @section('content')
<link rel="stylesheet" type="text/css" href="/znx/css/show.css">
<script type="text/javascript" src="/znx/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/znx/js/qna.js"></script>
<script type="text/javascript" src="/znx/js/pager.js"></script>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- 开始 -->
<div class="mainContainner">
    <div class="Corder">
        <b>接收人:</b>
    </div>
    <div class="CommentList" style="overflow-y :auto; height: 300px">
        <div style="height: 50px">
            <form action="/message/create" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}" placeholder="请选择需要接收消息的人, 默认为全员消息. ">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                      </span>
                </div>
            </form>
            <script type="text/javascript">
                var a = $('.am-form-field').value();
                alert(a);
            </script>
        </div>
        <form action="/message" method="post">
            {{csrf_field()}}
            <table class="table table-hover">
                <tr>
                    <td></td>
                    <td>ID</td>
                    <td>用户名</td>
                </tr>
                @foreach($users as $v) @if($v['weight'] != 1)
                <tr>
                    <td width="50px">
                        <input type="radio" name="catch_id" value="{{$v['id']}}">
                    </td>
                    <td>{{$v['id']}}</td>
                    <td>{{$v['username']}}</td>
                </tr>
                @endif @endforeach
            </table>
    </div>
    <div class="commentBox">
        <div class="Ctop">
            <label class="Ctitle"><img src="/znx/img/user_comment.png">通知</label>
        </div>
        <div class="Cinput">
            <textarea placeholder="请输入内容" class="Ccont" name="content"></textarea>
        </div>
        <div class="Csunbmit">
            <label class="Cnick">你的昵称：</label>
            <input type="hidden" name="send_id" value="{{Session::get('id')}}" />
            <input class="Cusername" placeholder="" name="send_name" value="{{Session::get('name')}}"></input>
            <button class="submitBtn">发布通知</button>
        </div>
    </div>
</div>
</form>
<!-- 结束 -->
@endsection