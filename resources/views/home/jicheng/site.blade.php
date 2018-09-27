@extends('home.jicheng.touti') @section('content')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/sj/js/jquery.cxselect.js"></script>
<style type="text/css">
table.dataintable {
    margin-top: 15px;
    border-collapse: collapse;
    border: 1px solid #aaa;
    width: 100%;
}

table.dataintable th {
    vertical-align: baseline;
    padding: 5px 15px 5px 6px;
    background-color: #3F3F3F;
    border: 1px solid #3F3F3F;
    text-align: left;
    color: #fff;
}

table.dataintable td {
    vertical-align: text-top;
    padding: 6px 15px 6px 6px;
    border: 1px solid #aaa;
}

table.dataintable tr:nth-child(odd) {
    background-color: #F5F5F5;
}

table.dataintable tr:nth-child(even) {
    background-color: #fff;
}
</style>
<div class="contact">
    <div class="container">
        <div class="col-md-8 contact-grids1 animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
            <form action="/home/dosite" method="post">
                {{csrf_field()}}
                <div class="contact-form2">
                    <label for="user-name" class="am-u-sm-3 am-form-label">收货地址<span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9" id="city_china">
                        <select class="province" name="sheng">
                        </select>
                        <select class="city" name="shi">
                        </select>
                        <select class="area" name="qu">
                        </select>
                        <br>
                        <br>
                        <br>
                    </div>
                     <label for="user-name" class="am-u-sm-3 am-form-label">详细地址<span class="tpl-form-line-small-title"></span></label>
                        <br>
                        <textarea style="width: 300px;height: 100px" name="address"></textarea>
                    <script>
                    var urlChina = '/sj/js/cityData.min.json';
                    $.cxSelect.defaults.url = urlChina;
                    $('#city_china').cxSelect({
                        selects: ['province', 'city', 'area']
                    });
                    </script>
                </div>
                <div class="contact-form2">
                    <h4>邮政编码</h4>
                    <p class="grid1">
                        <input type="text" placeholder="请输入6位邮政编码" minlength="6" maxlength="6" required="" name="mail">
                        <span></span>
                    </p>
                    <script>
                    //密码
                    $('input[name=mail]').focus(function(){

                    }).blur(function(){
                        $(this).removeClass('active');
                        //获取用户的输入值
                        var v = $(this).val();
                        //正则
                        var reg = /^\d{6}$/;

                        if(!reg.test(v)) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确!!</span>').show();
                        }else{
                            //边框
                            $(this).removeClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                        }
                    })
                    </script>
                </div>
                <div class="contact-form2">
                    <h4>收货人姓名</h4>
                    <input type="text" placeholder="请输入您的姓名" required="" name="name">
                </div>
                <div class="contact-form2">
                    <h4>手机号码</h4>
                    <input type="text" placeholder="请输入11位手机号" maxlength="11" required="" name="call">
                    <span></span>
                    <script>
                    //密码
                    $('input[name=call]').focus(function(){

                    }).blur(function(){
                        $(this).removeClass('active');
                        //获取用户的输入值
                        var v = $(this).val();
                        //正则
                        var reg = /^\d+$/;

                        if(!reg.test(v)) {
                            //边框
                            $(this).addClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:red">格式不正确!!</span>').show();
                        }else{
                            //边框
                            $(this).removeClass('error');
                            //文字提醒
                            $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                        }
                    })
                    </script>
                </div>
                <input type="submit" value="Submit">
            </form>
            <table class="dataintable">
                <tr>
                    <th style="width: 250px">收货地址</th>
                    <th>详细地址</th>
                    <th style="width: 80px; padding: 0px" >邮政编码</th>
                    <th style="width: 100px; padding: 0px">收货人姓名</th>
                    <th style="width: 100px">收货人电话</th>
                    <th>操作</th>
                </tr>
                @foreach($site as $v)
                <tr>
                    <td>{{$v['sheng']}}/{{$v['shi']}}/{{$v['qu']}}</td>
                    <td>{{$v['address']}}</td>
                    <td>{{$v['mail']}}</td>
                    <td>{{$v['name']}}</td>
                    <td>{{$v['call']}}</td>
                    <td style="width: 60px">
                        <a href="/home/delsite/{{$v['id']}}">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-4 contact-grids">
                @foreach($setting as $v)
                <div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 ">
                            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Address</h4>
                            <p>{{$v['address']}}</p>
                        </div>
                    </div>
                </div>
                <div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 contact-grid4">
                            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Call Us</h4>
                            <p>{{$v['phone']}}</p>
                        </div>
                    </div>
                </div>
                <div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="contact-grid1">
                        <div class="contact-grid2 contact-grid5">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-grid3">
                            <h4>Email</h4>
                            <p>{{$v['email']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection