@extends('home.jicheng.touti') @section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Checkout</h2>
        <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>Checkout</h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- contact -->
<div class="check-out">
    <div class="container">
        <script>
        $(document).ready(function(c) {
            $('.close1').on('click', function(c) {
                $('.cross').fadeOut('slow', function(c) {
                    $('.cross').remove();
                });
            });
        });
        </script>
        <script>
        $(document).ready(function(c) {
            $('.close2').on('click', function(c) {
                $('.cross1').fadeOut('slow', function(c) {
                    $('.cross1').remove();
                });
            });
        });
        </script>
        <script>
        $(document).ready(function(c) {
            $('.close3').on('click', function(c) {
                $('.cross2').fadeOut('slow', function(c) {
                    $('.cross2').remove();
                });
            });
        });
        </script>
        @if(Session::has('success'))
        <div class=" am-u-sm-12" style="padding:0px;margin:0px;" id="xiaoshi">
            <div class="dashboard-stat green">
                <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('success')}} </div>
            </div>
        </div>
        @endif @if(Session::has('error'))
        <div class=" am-u-sm-12" style="padding:0px;margin:0px;" id="xiaoshi">
            <div class="dashboard-stat red">
                <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('error')}} </div>
            </div>
        </div>
        @endif
        <table class="table animated wow fadeInLeft" data-wow-delay=".5s">
            <tr>
                <th class="t-head head-it " style="font-size:20px">Check</th>
                <th class="t-head head-it " style="font-size:20px">Item</th>
                <th class="t-head head-it " style="font-size:20px">Color/Size</th>
                <th class="t-head" style="font-size:20px">Price</th>
                <th class="t-head" style="font-size:20px">Quantity</th>
                <th class="t-head" style="font-size:20px">Total</th>
                <th class="t-head" style="font-size:20px">操作</th>
            </tr>
            <form action="/order/TianJia" method="post" enctype="multipart/form-data">
                @foreach($cart as $v) @if($v['user_id'] == session('id')) {{csrf_field()}}
                <tr class="cross">
                    <td class="t-data">
                        <input type="checkbox" name="order[]" class="order" value="{{$v['good_id']}}-{{$v->id}}">
                    </td>
                    <td class="ring-in t-data">
                        <a href="single.html" class="at-in">
                    <img src="{{$v['image']}}" style="width:100px; height:130px" class="img-responsive" alt=""><input type="hidden" name="image" value="{{$v['image']}}">
                </a>
                        <div class="sed">
                            <h5>{{$v['title']}}<input type="hidden" name="title" value="{{$v['title']}}"></h5>
                        </div>
                        <div class="clearfix"> </div>
                        <!-- <div class="close1"> </div> -->
                    </td>
                    <td class="t-data">
                        @foreach($colors as $c) @if($v['color'] == $c['id']) 颜色: {{$c['name']}}
                        <input type="hidden" name="color" value="{{$c['name']}}"> @endif @endforeach
                        <br> @foreach($size as $s) @if($v['color'] == $s['id']) 尺寸: {{$s['name']}}
                        <input type="hidden" name="size" value="{{$s['name']}}"> @endif @endforeach
                    </td>
                    <td class="t-data price">{{$v['price']}}
                        <input type="hidden" name="price" value="{{$v['price']}}" style="width: 100px">
                    </td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus jian">&nbsp;</div>
                                <div class="entry value num zhi" ht="1">1</div>
                                <div class="entry value-plus active jia">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <input type="hidden" name="amount" class="amount" value="">
                    <td class="t-data money">{{$v['price']}}</td>
                    <input type="hidden" name="prices" class="pr" value="" style="width: 100px">
                    <script type="text/javascript">
                    $('.jian').click(function() {
                        $(this).parents('.cross').attr('id', 'liupi');
                        $(this).parents('.cross').siblings().removeAttr('id');
                        var money = $('#liupi .price').html();
                        var str = money.substring(1);
                        var qwe = parseInt(str);
                        var content = $('#liupi .num').html();
                        if (content == 1) {
                            var cheng = qwe * content;
                        } else {
                            var cheng = qwe * content - qwe;
                        }

                        var money = $('#liupi .money').html('￥' + cheng);
                    });
                    $('.jia').click(function() {
                        $(this).parents('.cross').attr('id', 'liupi');
                        $(this).parents('.cross').siblings().removeAttr('id');
                        var money = $('#liupi .price').html();
                        var str = money.substring(1);
                        var qwe = parseInt(str);
                        var content = $('#liupi .num').html();
                        cheng = qwe * (content) + qwe;

                        var money = $('#liupi .money').html('￥' + cheng);
                    });
                    </script>
                    <script type="text/javascript">
                    var a = $('.money').text();
                    $('.jia').click(function() {

                        console.log(cheng);
                    })
                    </script>
                    <td class="t-data"><a href="/home/cart_items/delete/{{$v['id']}}">删除</a></td>
                </tr>
                @endif @endforeach
        </table>
        <table style="background-color:#02CFCF;font-size:20px;width: 1140px; height: 65px;">
            <tr>
                <!--  <td style="width: 30%">
                            <div style="float: right;">全选</div>
                        </td> -->
                <td style="width: 30%">
                    <div style="float: right;" class="qian">总价:<span class="cont"></span></div>
                </td>
                <td style="width: 30%">
                    <input type="hidden" value="结算" class="submit" style="background-color:orange; float: right; width: 100px;height: 65px;">
                </td>
                <script type="text/javascript">
                $('.submit').click(function() {
                    var zong = $('.cont').html();
                    $('.pr').val(zong);
                })
                </script>
                <script type="text/javascript">
                $('.order').click(function() {
                    var cont = $('.money').html();
                    $('.cont').html(cont);
                    var zhi = $('.zhi').html();
                    $('.amount').val(zhi);
                })
                </script>
            </tr>
        </table>
        <script type="text/javascript">
        $('.order').click(function() {
            $('.order').each(function(k, v) {
                if (v.checked) {
                    $(this).parents('.cross').attr('id', 'liupi');
                    $(this).parents('.cross').siblings().removeAttr('id');
                    var ss = $('.cross .money').html();
                    console.log(ss);
                    $('.submit').attr('type', 'submit');
                    return false;
                } else {
                    $('.submit').attr('type', 'hidden');
                }
            })
        });
        </script>
        </form>
    </div>
</div>
<!--quantity-->
<script>
$('.value-plus').on('click', function() {
    var divUpd = $(this).parent().find('.value'),
        newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus').on('click', function() {
    var divUpd = $(this).parent().find('.value'),
        newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) divUpd.text(newVal);
});

setTimeout(function() {
    $('#xiaoshi').css('display', 'none');
}, 2000);
</script>
@endsection