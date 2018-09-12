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
            @endif

            @if(Session::has('error'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;" id="xiaoshi">
                <div class="dashboard-stat red">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('error')}} </div>
                </div>
            </div>
            @endif

        <table class="table animated wow fadeInLeft" data-wow-delay=".5s">
            <tr>
                <th class="t-head head-it ">Item</th>
                <th class="t-head head-it ">尺码/颜色</th>
                <th class="t-head">Price</th>
                <th class="t-head">Quantity</th>
                <th class="t-head">Total</th>
                <th class="t-head">操作</th>
            </tr>
            @foreach($cart as $v)
            <tr class="cross">
                <td class="ring-in t-data">
                    <a href="single.html" class="at-in">
                    <img src="{{$v['image']}}" style="width:100px; height:130px" class="img-responsive" alt="">
                </a>
                    <div class="sed">
                        <h5>{{$v['title']}}</h5>
                    </div>
                    <div class="clearfix"> </div>
                    <!-- <div class="close1"> </div> -->
                </td>
                <td class="t-data">
                    @foreach($colors as $c) @if($v['color'] == $c['id']) 颜色: {{$c['name']}}
                    <br/> @endif @endforeach @foreach($size as $s) @if($v['color'] == $s['id']) 尺寸: {{$s['name']}}
                    <br/> @endif @endforeach
                </td>
                <td class="t-data">{{$v['price']}}</td>
                <td class="t-data">
                    <div class="quantity">
                        <div class="quantity-select">
                            <div class="entry value-minus">&nbsp;</div>
                            <div class="entry value"><span class="span-1">1</span></div>
                            <div class="entry value-plus active">&nbsp;</div>
                        </div>
                    </div>
                </td>
                <td class="t-data">$100.00</td>
                <td class="t-data"><a href="/home/cart_items/delete/{{$v['id']}}">删除</a></td>
            </tr>
            @endforeach
        </table>
        <div class=" v-total">
            <h5 class="continue">Cart Total</h5>
            <div class="price-details">
                <h3>Price Details</h3>
                <span>Total</span>
                <span class="total1">6200.00</span>
                <span>Discount</span>
                <span class="total1">---</span>
                <span>Delivery Charges</span>
                <span class="total1">150.00</span>
                <div class="clearfix"></div>
            </div>
            <ul class="total_price">
                <li class="last_price">
                    <h4>TOTAL</h4></li>
                <li class="last_price"><span>6350.00</span></li>
                <div class="clearfix"> </div>
            </ul>
            <a href="single.html">Produced By Cart</a>
        </div>
    </div>
</div>!!
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

    setTimeout(function()
    {
        $('#xiaoshi').css('display','none');
    },2000);


</script>
@endsection