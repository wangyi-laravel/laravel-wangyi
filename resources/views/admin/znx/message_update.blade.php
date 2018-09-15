@extends('layouts.admin') @section('title') 通知修改 @endsection @section('title','通知修改') @section('content')
<link rel="stylesheet" type="text/css" href="/znx/css/show.css">
<script type="text/javascript" src="/znx/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/znx/js/qna.js"></script>
<script type="text/javascript" src="/znx/js/pager.js"></script><hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 通知修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                
                <!-- 开始 -->
                <form action="/message/{{$messages['id']}}" method="post">
                    {{csrf_field()}} {{method_field('PUT')}}
                    <div class="mainContainner">
                        <div class="commentBox">
                            <div class="Ctop">
                                <label class="Ctitle"><img src="/znx/img/user_comment.png">通知</label>
                            </div>
                            <div class="Cinput">
                                <textarea placeholder="请输入内容" class="Ccont" name="content">{{$messages['content']}}</textarea>
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
            </div>
        </div>
    </div>
</div>
@endsection