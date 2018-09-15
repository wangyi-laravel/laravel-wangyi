@extends('layouts.admin') @section('title','站内信') @section('content')
<link rel="stylesheet" type="text/css" href="/znx/css/show.css">
<script type="text/javascript" src="/znx/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/znx/js/qna.js"></script>
<script type="text/javascript" src="/znx/js/pager.js"></script>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- 开始 -->
<form action="/message" method="post">
    {{csrf_field()}}
    <div class="mainContainner">
        <div class="Corder">
            <b>接收人:</b>
        </div>
        <div class="CommentList" style="overflow-y :auto; height: 300px">
            <div style="height: 50px"></div>
            <table class="table table-hover">
                <tr>
                    <td></td>
                    <td>ID</td>
                    <td>用户名</td>
                </tr>
                @foreach($users as $v)
                @if($v['weight'] != 1)
                <tr>
                    <td width="50px"><input type="radio" name="catch_id" value="{{$v['id']}}"></td>
                    <td>{{$v['id']}}</td>
                    <td>{{$v['username']}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="fydiv">
            <ul class="fenye">
            </ul>
        <div class="commentBox">
            <div class="Ctop">
                <label class="Ctitle"><img src="/znx/img/user_comment.png">通知</label>
            </div>
            
            <div class="Cinput">
                <textarea placeholder="请输入内容" class="Ccont" name="content"></textarea>
            </div>
            <div class="Csunbmit">
                <label class="Cnick">你的昵称：</label>
                <input type="hidden" name="send_id" value="{{Session::get('id')}}">
                <input class="Cusername" placeholder="" name="send_name" value="{{Session::get('username')}}"></input>
                <button class="submitBtn">发布通知</button>
            </div>
        </div>
    </div>
</form>
<!-- 结束 -->



@endsection