@extends('layouts.admin') @section('title')  @endsection @section('content')
<a href="/message" style="float: right;">回到列表</a>
<link rel="stylesheet" type="text/css" href="/znx/css/show.css">
<script type="text/javascript" src="/znx/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/znx/js/qna.js"></script>
<script type="text/javascript" src="/znx/js/pager.js"></script>

<form action="/doback/{{$messages['id']}}" method="post">
    {{csrf_field()}} 
    <div class="mainContainner">
        <div class="Corder">
            <b>消息内容:</b>
        </div>
        <div class="CommentList">
            <ul class="listul">
                {{$messages['content']}}
            </ul>
        </div>
        <div class="Ctop">
            <label class="Ctitle"><img src="/znx/img/user_comment.png">来自{{$messages['send_name']}}:</label>
        </div>


    </div>
</form>
@endsection