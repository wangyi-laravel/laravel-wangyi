<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="/assets/js/echarts.min.js"></script>
    <script src="/ueditor/jquery-3.3.1.js"></script>

</head>

<body data-type="index">
    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="/admin" class="tpl-logo">
                <img src="/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <?php 

                use \App\Message;
                use \App\User;
                    $messages = Message::where('catch_id',Session('id'))->count();
                    $mess = Message::where('catch_id',Session('id'))->where('status','0')->count();
                    $contents = Message::orderby('id','desc')->where('catch_id',Session('id'))->take(2)->get();
                    $user = User::all();

                ?> 
                
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-comment-o"></span> 消息 
                        @if($messages['status'] == 0 )
                        <span class="am-badge tpl-badge-danger am-round">{{$mess}}</span>
                        @endif
                        </span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-danger">{{$mess}}</span> 条新消息</h3><a href="/message">查看全部</a></li>
                        <li>
                            @foreach($contents as $v)
                            <a href="#" class="tpl-dropdown-content-message">
                                @foreach($user as $u)
                                    @if($v['send_id'] == $u['id'])
                                    <span class="tpl-dropdown-content-photo">
                                        <img src="{{$u['image']}}" alt=""> 
                                    </span>
                                    <span class="tpl-dropdown-content-subject">
                                        <span class="tpl-dropdown-content-from">  </span>
                                        <span class="tpl-dropdown-content-time">
                                        <?php 
                                            $catime = strtotime($v['created_at']);
                                            $time = time();
                                            $ago = $time - $catime;
                                            $ago1 = date('i',$ago);
                                            if ($ago1 > 60) {
                                                echo $v['created_at'];
                                            }else{
                                                if ($ago < 60) {
                                                    echo '刚刚';
                                                }else{
                                                    echo $ago1.'分钟之前';
                                                }
                                            }
                                            
                                         ?>
                                        </span>
                                    </span>
                                    <span class="tpl-dropdown-content-font"> {{$v['content']}} </span>
                                    @endif
                                @endforeach
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
                
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">{{Session::get('username')}}</span><span class="tpl-header-list-user-ico"><img src="/assets/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="/admin/setting"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="/admin/logout"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>
    </div>
    <div class="tpl-page-container tpl-page-header-fixed">
        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                操作菜单
            </div>
            <div class="tpl-left-nav-list">
                @include('layouts.admin._menu')
            </div>
        </div>
        <div class="tpl-content-wrapper">
            @if(Session::has('success'))
            <div class="am-u-sm-12" style="padding: 0px;margin: 0px;">
                <div class="dashboard-stat green">
                    <div class="desc" style="text-align: center;line-height: 95px;color: white"> {{Session::get('success')}} </div>
                </div>
            </div>
            @endif
            @if(Session::has('error'))
            <div class="am-u-sm-12" style="padding: 0px;margin: 0px;">
                <div class="dashboard-stat red">
                    <div class="desc" style="text-align: center;line-height: 95px;color: white"> {{Session::get('error')}} </div>
                </div>
            </div>
            @endif
            <div class="tpl-content-page-title">
            @section('title') 欢迎回到后台 @show
            </div>
            @section('content') 
            @show
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/amazeui.min.js"></script>
    <script src="/assets/js/iscroll.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
<SCRIPT Language=VBScript>
<!--

//-->
</SCRIPT>