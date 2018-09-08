@extends('home.jicheng.touti')
@section('content')
<div class="login">
    <div class="container">
    <form action="/admin/login" method="post">
      {{csrf_field()}} 
      <div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
        <div class="login-mail">
          <input type="text" placeholder="hahha1" required="" name="username">
          <i class="glyphicon glyphicon-envelope"></i>
        </div>
        <div class="login-mail">
          <input type="password" placeholder="Password" required="" name="password">
          <i class="glyphicon glyphicon-lock"></i>
        </div>
        <input type="text" name="num" >
        <img src="{{url('/capcha')}}" alt="" onclick="this.src=this.src+'?'+Math.random()" width="100" height="40" border="0">
        

        <a class="news-letter " href="#">
             <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forgot Password</label>
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