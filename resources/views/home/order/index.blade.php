@extends('home.jicheng.touti') @section('content')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
td {
    width: 200px;
    text-align: center;
}

#one {
    text-align: left;
}
body{
	background: #FFFFFF;
}
.qwe{
	background-color: #f2f7ff;
	border-bottom: 1px dashed #ddd;
	border-top: 1px dashed #ddd;
}
</style>
<form action="/order/jiezhang" method="get">
    {{csrf_field()}}
    <div class="container">
        <nav class="navbar navbar-inverse col-md-12" style="color:white;">
            <table>
                <tr>
                    <td id="one">商品标题</td>
                    <td>商品属性</td>
                    <td>单价</td>
                    <td>数量</td>
                    <td>优惠方式</td>
                    <td>小计</td>
                </tr>
            </table>
        </nav>
        <table style="background: #FBFCFF">
            <tr>
                <td id="one" style="font-size:12px">
                    <div style="float: left;">
                        <img src="{{$orders['image']}}" width="50" height="60">
                        <div style="float: right;">
                            {{$orders['title']}}
                            <br>
                            <a href="https://xiaobao.taobao.com/contract/item_service.htm?spm=a210c.1.0.0.79791debHt500H&scm=1010.100.100.1&contract_id=7d&item_id=574932060457"><img src="//img.alicdn.com/tps/i1/T1EQA5FpVgXXceOP_X-16-16.jpg"></a>
                            <img src="//assets.alicdn.com/sys/common/icon/trade/xcard.png">
                            <img src="//gtd.alicdn.com/tps/i4/T1pegvFrBdXXaSQP_X-16-16.png">
                            <img src="//gtd.alicdn.com/tps/i3/TB1dtEWFVXXXXXwaXXXAz6UFXXX-16-16.png">
                            <br>
                            <span>发货时间：卖家承诺5天</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div>颜色:{{$orders['color']}}</div>
                    <div>尺码:{{$orders['size']}}</div>
                </td>
                <td style="color:red;font-size: 21px;font-weight:bold">{{$orders['price']}}</td>
                <td>{{$orders['amount']}}</td>
                <td>无优惠</td>
                <td class="money" style="color:red;font-size: 21px;font-weight:bold">{{$orders['prices']}}</td>
            </tr>
        </table>
        <table class="col-md-12 qwe" style="margin-top: 30px;background: #F2F7FF">
            <tr>
                <td rowspan="3" class="col-md-6" style="padding:10px 0px">
                    <div style="padding: 0px;width: 260px;" class="zb">给卖家留言:
                        <input type="text" name="">
                    </div>
                </td>
                <td>
                    <div style="padding: 0px;width: 176px;float: left;font-size:12px;line-height: 50px">运送方式:&nbsp;&nbsp;&nbsp;普通配送快递 免邮</div>
                    <span style="color: red;float: right;line-height: 50px;font-size: 21px;font-weight:bold">0.00</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="padding: 0px;width: 280px;font-size:12px;line-height: 50px">发货时间:&nbsp;&nbsp;&nbsp;卖家承诺订单在买家付款后, 5天内<a href="">发货</a></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="margin-top: 30px;">
                        <span style="padding: 0px;width: 65px;font-size:12px;float:left;height: 50px">运费险:&nbsp;&nbsp;&nbsp;</span>
                        <div style="float:left;">
                            <input type="radio" name="yunfei" checked>
                        </div>
                        <div style="font-size:12px;background: #36AB67;width:50px;border-radius:10%;float:left">运费险
                        </div>
                        <span style="font-size:12px;width:230px;display:block;margin-left: 100px;">卖家送,确认收货前退货可赔
                        		<img src="//img.alicdn.com/tps/TB1QFFkMXXXXXcNXFXXXXXXXXXX-32-32.png" width="14">
                        		<img src="//img.alicdn.com/tps/TB1zNZ_LVXXXXasapXXXXXXXXXX-32-32.png" width="14">

                        		<span style="float: right;">3153511</span>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="line-height: 50px; font-size: 15px;width:250px;margin-left: 800px;">店铺合计(含运费):&nbsp;&nbsp;&nbsp;
                    <span style="font-size: 35px;color: red" class="dd">123</span>
                </div>
                </td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
    $('.zb').click(function() {
        $(this).html(function() {
            return '给卖家留言:<textarea>11</textarea>';
        });
    })
    var money = $('.money').html();
    $('.dd').html(money);
    </script>
</form>
@endsection