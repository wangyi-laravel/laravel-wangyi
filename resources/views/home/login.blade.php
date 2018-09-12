@extends('home.jicheng.touti') @section('content')
<div class="login">
    <div class="container">
        <form action="/login" method="post">
            {{csrf_field()}}
            <div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
                <div class="login-mail">
                    <input type="text" placeholder="hahha1" required="" name="username">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input id="show" type="password" placeholder="Password" required="" name="password">
                    <span id="set" class="glyphicon glyphicon-eye-open" ></span>
                </div>
                <style type="text/css">
                #set {
                    display: inline-block;
                    cursor: pointer;
                }
                </style>
                <script>
                $('#set').click(function() {

                        if ($(this).attr('erro')==0) {
                            $(this).attr('erro','1');
                            $(this).attr('class','glyphicon glyphicon-eye-open');
                            $('#show').attr('type',"password");
                        } else {
                            $(this).attr('erro','0');

                            $(this).attr('class','glyphicon glyphicon-eye-close');
                            
                            $('#show').attr('type',"text");
                        }
                    });
                </script>
                <input type="text" name="num">
                <img src="{{url('/capcha')}}" alt="" onclick="this.src=this.src+'?'+Math.random()" width="100" height="40" border="0">
                <a class="news-letter " href="#">
                    <label class="checkbox1">
                        <input type="checkbox" name="checkbox"><i> </i>Forgot Password</label>
                </a>
            </div>
            <div class="col-md-6 login-do animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <label class="hvr-sweep-to-top login-sub">
                    <input type="submit" value="login">
                </label>
                <p>Do not have an account?</p>
                <a href="register.html" class="hvr-sweep-to-top">Signup</a>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
@endsection