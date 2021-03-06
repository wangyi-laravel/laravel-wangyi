@extends('home.jicheng.touti') @section('content')
<style type="text/css">
.login-mail {
    border: 0px gray;
    background: white;
}
</style>
<!-- 闪存start -->
@if(Session::has('success'))
<div class="am-u-sm-12" style="padding: 0px;margin: 0px;">
    <div class="dashboard-stat green">
        <div class="desc" style="text-align: center;line-height: 95px;color: white"> {{Session::get('success')}} </div>
    </div>
</div>
@endif @if(Session::has('error'))
<div class="am-u-sm-12" style="padding: 0px;margin: 0px;">
    <div class="dashboard-stat red">
        <div class="desc" style="text-align: center;line-height: 95px;color: white"> {{Session::get('error')}} </div>
    </div>
</div>
@endif
<!-- 闪存end -->
<div class="login">
    <div class="container">
        <form action="/login" method="post">
            {{csrf_field()}}
            <div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
                <div class="login-mail">
                    <input type="text" placeholder="hahha1" required="" name="username" style="width:485px;">
                    <i class="glyphicon glyphicon-envelope" style=""></i>
                </div>
                <div class="login-mail">
                    <input id="show" type="password" placeholder="Password" required="" name="password" style="width:485px;">
                    <i id="set" class="glyphicon glyphicon-eye-open"></i>
                </div>
                <style type="text/css">
                #set {
                    display: inline-block;
                    cursor: pointer;
                }
                </style>
                <script>
                $('#set').click(function() {

                    if ($(this).attr('erro') == 0) {
                        $(this).attr('erro', '1');
                        $(this).attr('class', 'glyphicon glyphicon-eye-open');
                        $('#show').attr('type', "password");
                    } else {
                        $(this).attr('erro', '0');

                        $(this).attr('class', 'glyphicon glyphicon-eye-close');

                        $('#show').attr('type', "text");
                    }
                });
                </script>
                <input type="text" name="num" style="height: 40px; border: 0px solid black;">
                <img src="{{url('/capcha')}}" alt="" onclick="this.src=this.src+'?'+Math.random()" width="100" height="40" border="0">
            </div>
            <div class="col-md-6 login-do animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <label class="hvr-sweep-to-top login-sub">
                    <input type="submit" value="login">
                </label>
                <p>Do not have an account?</p>
                <a href="/auth/weibo" class="hvr-sweep-to-top">微博登录</a>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
@endsection