@extends('home.jicheng.touti') @section('content')
<style type="text/css">
    .login-mail{
        border: 1px  gray; 
        background: white;
    }
</style>
<script src="/ueditor/jquery-3.3.1.js"></script>
<div class="banner-top">
    <div class="container">
        <h2 class="animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">welcome</font></font></h2>
        <h3 class="animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;"><a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页</font></font></a><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">/</font></font></label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册</font></font></h3>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="login">
    <div class="container">
        <form action="/store" method="post">
            {{csrf_field()}}
            <div class="col-md-6 login-do1 animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                Username:
                <div class="login-mail">
                    <input type="text" required="" name="username" placeholder="请输入2~12位用户名" style="width:345px;">
                    <span></span>
                    <i class="glyphicon glyphicon-user" style="float: right;"></i>
                </div>
                Password:
                <div class="login-mail">
                    <input type="password" id="show" required="" name="password" placeholder="请输入8~20位非空字符" style="width:345px;">
                    <span></span>
                    <i id="set" class="glyphicon glyphicon-eye-open" style="float:right;"></i>
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
                
                Name:
                <div class="login-mail">
                    <input type="text" required="" name="name" placeholder="起个昵称吧!!!" style="width:345px;">
                    <i class="glyphicon glyphicon-edit" style="float:right;"></i>
                </div>
                <a class="news-letter" href="/terms" style="width: 140px">
                    <label class="checkbox1">
                        <input type="checkbox" name="checkbox"><i> </i>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">我同意这些</label><b style="font-size: 15px">条款</b></font>
                        </font>
                </a>
            </div>
            <div class="col-md-6 login-do animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <label class="hvr-sweep-to-top login-sub" style="height: 42px">
                    <font style="vertical-align: inherit;" >
                        <font style="vertical-align: inherit;">
                            <input type="submit" value="提交" style="height: 42px">
                        </font>
                    </font>
                </label>
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">已经注册?</font>
                    </font>
                </p>
                <a href="/login" class="hvr-sweep-to-top">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">登录</font>
                    </font>
                </a>
            </div>
            <style>
                td{
                    padding:10px;
                    font-size:14px;
                }
                input{
                    height:22px;
                }

                .active{
                    border:solid 1px #2bf666;
                }

                .error{
                    border:solid 1px red;
                }
            </style>
            <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
            <script>
                    
                    var CUSER = false;
                    var CPASS = false;
                    

                    //用户名
                    $('input[name=username]').focus(function(){

                    }).blur(function(){
                        //移出激活状态的class active
                        $(this).removeClass('active');
                        //正则判断
                        var v = $(this).val();
                        //声明正则
                        var reg = /^\w{2,12}$/;
                        //判断
                        if(!reg.test(v)){

                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确!!</span>').show();
                            CUSER = false;
                        }else{
                            var input = $(this);
                            //发送 AJAX 请求检测用户名是否已经存在
                            $.ajax({
                                url: '/ajax/check-user-exists.php',
                                type: 'post',
                                data: {username: v},
                                success: function(data){
                                    if(data != '1'){
                                        //文字提醒
                                        input.next().html('<span style="color:red">被注册了?换一个吧!</span>').show();
                                        CUSER = false;
                                    }else{
                                        input.removeClass('error');
                                        input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                                        CUSER = true;
                                    }
                                },
                                async: false
                            })              
                        }
                    })
                    
                    //密码
                    $('input[name=password]').focus(function(){

                    }).blur(function(){
                        $(this).removeClass('active');
                        //获取用户的输入值
                        var v = $(this).val();
                        //正则
                        var reg = /^\S{8,20}$/;

                        if(!reg.test(v)) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确!!</span>').show();
                            CPASS = false;
                        }else{
                            //边框
                            $(this).removeClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                            CPASS = true;
                        }
                    })

                    //条款
                    var CHECKBOX = false;

                    $('input[name=checkbox]').click(function(){
                        if (CHECKBOX == false) {
                            // alert(111);
                            $(this).addClass('checked');
                            CHECKBOX = true;
                        }else{
                            // alert(2222);
                            $(this).removeClass('checked');
                            CHECKBOX = false;
                        }
                    })
                    //表单的提交事件
                    $('form').submit(function(){
                        //触发错误提醒
                        $('input').trigger('blur');

                        if(CUSER  && CPASS && CHECKBOX) {
                            return true;
                        }else{
                            return false;
                        }
                    });

                </script>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
@endsection