@extends('home.jicheng.touti') @section('content')
<script src="/ueditor/jquery-3.3.1.js"></script>
<div class="banner-top">
    <div class="container">
        <h2 class="animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">welcome</font></font></h2>
        <h3 class="animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;"><a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页</font></font></a><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">/</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册</font></font></h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- <style>
   
#show{

}
#set{
    display: inline-block;
    
    cursor: pointer;
}
</style>
<input id="show" type="password" maxlength="6">
<span id="set">显示密码</span>
<script>
set.onclick = function(){

    if(this.innerHTML == '显示密码'){
        this.innerHTML = '隐藏密码';
        show.type="text";
    }else{
        this.innerHTML = '显示密码';
        show.type="password";
    }
}    
</script> -->
<div class="login">
    <div class="container">
        <form action="/store" method="post">
            {{csrf_field()}}
            <div class="col-md-6 login-do1 animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                Username:
                <div class="login-mail">
                    <input type="text" required="" name="username">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                Password:
                <div class="login-mail">
                    <input type="password" id="show" required="" name="password">
                    <span id="set" class="glyphicon glyphicon-eye-open"></span>
                    <!-- <span  class="glyphicon glyphicon-eye-close"></span> -->
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
                            // alert(123);
                            $(this).attr('erro','1');
                            $(this).attr('class','glyphicon glyphicon-eye-open');
                            $('#show').attr('type',"password");
                        } else {
                            // alert(456);
                            $(this).attr('erro','0');

                            
                            $(this).attr('class','glyphicon glyphicon-eye-close');
                            
                            $('#show').attr('type',"text");
                        }
                    });
                </script>
                Name:
                <div class="login-mail">
                    <input type="text" required="" name="name">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <a class="news-letter" href="#">
                    <label class="checkbox1">
                        <input type="checkbox" name="checkbox"><i> </i>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">我同意这些条款</font>
                        </font>
                    </label>
                </a>
            </div>
            <div class="col-md-6 login-do animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <label class="hvr-sweep-to-top login-sub">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            <input type="submit" value="提交">
                        </font>
                    </font>
                </label>
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">已经注册</font>
                    </font>
                </p>
                <a href="login.html" class="hvr-sweep-to-top">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">登录</font>
                    </font>
                </a>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
@endsection