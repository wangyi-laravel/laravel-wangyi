@extends('home.jicheng.touti') @section('content')
<link rel="stylesheet" type="text/css" href="/znx/css/show.css">
<script type="text/javascript" src="/znx/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/znx/js/qna.js"></script>
<script type="text/javascript" src="/znx/js/pager.js"></script>
<style type="text/css">
	.mainContainner{
		width: 1100px;
    	margin: 40px 170px;
	}
</style>
<!-- 开始 -->
<form action="/doreply/{{$message['id']}}" method="post">
    {{csrf_field()}} 
    <div class="mainContainner">
        <div class="Corder">
        	<b>消息内容:</b>
            <div style="float: right;"><a href="/messages"><b>回到列表</b></a></div>
        </div>

        <div class="CommentList">
            <ul class="listul">
            	{{$message['content']}}
            </ul>
        </div>
        <div class="fydiv">
            <ul class="fenye">
            </ul>
        </div>
        <div class="commentBox">
            <div class="Ctop">
                <label class="Ctitle"><img src="/znx/img/user_comment.png">回复{{$message['send_name']}}:</label>
            </div>
            <div class="Cinput">
                <textarea placeholder="请输入内容" class="Ccont" name="content"></textarea>
            </div>

            <input type="hidden" name="content_id" value="{{$message['id']}}">
            <input type="hidden" name="catch_id" value="{{$message['send_id']}}">
            
            <div class="Csunbmit">
                <label class="Cnick"></label>
                <input type="hidden" name="send_id" value="{{Session::get('id')}}">
                <input type="hidden" class="Cusername" placeholder="" name="send_name" value="{{Session::get('username')}}"></input>
                <button class="submitBtn">回复</button>
            </div>
        </div>
    </div>
</form>
@endsection