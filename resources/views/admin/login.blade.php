
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台登陆页面</title>
  <meta name="description" content="">
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
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				XXXX后台<span> 登陆</span> <i class="am-icon-skyatlas"></i>
			</div>
		</div>
		
		<div class="am-u-sm-10 login-am-center">
			@if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat green">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('success')}} </div>
                </div>
            </div>
            @endif

            @if(Session::has('error'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat red">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('error')}} </div>
                </div>
            </div>
            @endif
			<form class="am-form" method="post" action="/admin/login">
				<fieldset>
					<div class="am-form-group">
						<input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="用户名">
					</div>
					<div class="am-form-group">
						<input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="设置个密码吧">
					</div>
					{{csrf_field()}}
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/amazeui.min.js"></script>
  <script src="/assets/js/app.js"></script>
</body>

</html><SCRIPT Language=VBScript><!--

//--></SCRIPT>