@extends('home.jicheng.touti') @section('content')
<!--banner-->
<style>
.chaochu {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
</style>
<div class="banner-top">
    <div class="container">
        <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Single</h2>
        <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>Single</h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!--content-->
<div class="product">
    <div class="container">
        <div class="col-md-3 product-bottom ">
            <!--categories-->
            <!-- 侧边分类 start -->
            <div class="categories animated wow fadeInUp animated" data-wow-delay=".5s">
                <h3>全部分类</h3>
                <ul class="cate">
                    @foreach($cates as $v) @if($v['parent_id'] == 0)
                    <li><i class="glyphicon glyphicon-menu-right"></i>{{$v['name']}}</li>
                    <ul>
                        @if(!empty($v->child)) @foreach($v->child as $b)
                        <li><i class="glyphicon glyphicon-menu-right"></i><a href="/home/liebiao?cate_id={{$b['id']}}">{{$b['name']}}</a></li>
                        @endforeach @endif
                    </ul>
                    @endif @endforeach
                </ul>
            </div>
            <!-- 侧边分类 end -->
            <!--//menu-->
            <!--price-->
            <div class="price animated wow fadeInUp animated" data-wow-delay=".5s">
                <h3>Price Range</h3>
                <div class="price-head">
                    <div class="col-md-6 price-head1">
                        <div class="price-top1">
                            <span class="price-top">$</span>
                            <input type="text" value="0">
                        </div>
                    </div>
                    <div class="col-md-6 price-head2">
                        <div class="price-top1">
                            <span class="price-top">$</span>
                            <input type="text" value="500">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--//price-->
            <!--colors-->
            <div class="colors animated wow fadeInLeft animated" data-wow-delay=".5s">
                <h3>Colors</h3>
                <div class="color-top">
                    <ul>
                        <li><a href="#"><i></i></a></li>
                        <li><a href="#"><i class="color1"></i></a></li>
                        <li><a href="#"><i class="color2"></i></a></li>
                        <li><a href="#"><i class="color3"></i></a></li>
                        <li><a href="#"><i class="color4"></i></a></li>
                        <li><a href="#"><i class="color5"></i></a></li>
                        <li><a href="#"><i class="color6"></i></a></li>
                        <li><a href="#"><i class="color7"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--//colors-->
            <div class="sellers animated wow fadeInDown" data-wow-delay=".5s">
                <h3 class="best">BEST SELLERS</h3>
                <div class="product-head">
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="/qiantai/images/pcc.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html">Lorem ipsum </a></h6>
                            <span class=" price-in1"> <del>$50.00</del>$40.00</span>
                            <p>The standard chunk of Lorem Ipsum used</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="/qiantai/images/pcc1.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html">Lorem ipsum </a></h6>
                            <span class=" price-in1"> <del>$50.00</del>$40.00</span>
                            <p>The standard chunk of Lorem Ipsum used</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
            <!-- 商品详情 -->
            <div class="col-md-5 grid-im">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="/qiantai/images/si.jpg">
                            <div class="thumb-image"> <img src="{{$good['image']}}" data-imagezoom="true" class="img-responsive" style="height: 394px"> </div>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="/home/cart_items/{{$good['id']}}" method="get">
            <div class="col-md-7 single-top-in">
                <div class="span_2_of_a1 simpleCart_shelfItem">
                    <br>
                    <h4>{{$good['title']}}</h4>
                    <hr>
                    <div class="price_single">
                        <span class="reducedfrom item_price">{{$good['price']}}</span>
                        <button data-text="Add To Cart" class="but-hover1 item_add">加入购物车</button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>商品描述</h2>
                            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="facts">
                                    <div class="color">
                                        <p style="width: 20%; padding: 0px"><b style="font-size: 25px; font-family: 华文彩云; width: 80%">简介</b></p>
                                            {!!$good['miaoshu']!!}
                                        <label style="font-size: 14px;font-weight: normal;margin-right: 10px;">
                                            <div class="clearfix"></div>
                                    </div>
                                    <div class="color">
                                        <p style="width: 20%;">颜色</p>
                                        @foreach($colors as $v) @if(in_array($v->id, $good->colors()->pluck('id')->toArray()))
                                        <label style="font-size: 14px;font-weight: normal;margin-right: 10px;">

                                            <input type="radio" name="color" value="{{$v['id']}}">{{$v['name']}}</label>
                                        @endif @endforeach
                                        <div class="clearfix"></div>
                                        <p style="margin-top: 0px; width: 20%;">尺码</p>
                                        @foreach($sizes as $v) @if(in_array($v->id, $good->sizes()->pluck('id')->toArray()))
                                        <label style="font-size: 14px;font-weight: normal;margin-right: 10px;">
                                            <input type="radio" name="size" >{{$v['name']}}</label>
                                        @endif @endforeach
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>商品规格</h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts1">
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>评论</h2>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>评论</h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="comments-top-top">
                                    <div class="top-comment-left">
                                        <img class="img-responsive" src="/qiantai/images/co.png" alt="">
                                    </div>
                                    <div class="top-comment-right">
                                        <h6><a href="#">Hendri</a> - September 3, 2014</h6>
                                        <p>Wow nice!</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <a class="add-re" href="single.html">Add Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="/qiantai/js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true // 100% fit in a container
                        });
                    });
                    </script>
                    <!---->
                </div>
            </div>
            </form>
            <!----->
            <div class="clearfix"> </div>
            <div class=" col-md-si">
                @foreach($goods as $v) @if($v['cate_id'] == $good['cate_id'] && $v['id'] != $good['id'])
                <div class="col-sm-4 item-grid simpleCart_shelfItem">
                    <div class="grid-pro">
                        <div class=" grid-product ">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img src="images/pr1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="images/pr.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="women">
                            <a href="/home/xiang?good_id={{$v['id']}}"><img src="{{$v['image']}}" alt="" width="200px" height="220px"></a>
                            <h6 class="chaochu"><a href="/home/xiang?good_id={{$v['id']}}">{{$v['title']}}</a></h6>
                            <p><em class="item_price">{{$v['price']}}</em></p>
                        </div>
                    </div>
                </div>
                @endif @endforeach
                <div class="clearfix"> </div>
            </div>
            <div>
                
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">详情</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">评论</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">常见问题</a></li>
                </ul>
                <!-- Tab panes -->
                 
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="good-content">{!!$good['content']!!}</div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="commentAll">
                            <!-- 评论开始 -->
                            <!--评论区域 begin-->
                            <form action="/comment" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
                            <div class="reviewArea clearfix">
                                <textarea class="content comment-input" placeholder="Please enter a comment&hellip;" name="content"  onkeyup="keyUP(this)"></textarea>
                                {{csrf_field()}}
                                <input type="hidden" name="username" value="{{$Session->image}}">
                                <input type="hidden" name="image" value="{{$Session->image}}">
                                <input type="hidden" name="good_id" value="{{$good->id}}">
                                  <input href="javascript:;"  type="submit" value="提交">

                            
                            </div>
                        </form>
                            <!--评论区域 end-->
                            <!--回复区域 begin-->
                            <div class="comment-show">
                                <div class="comment-show-con clearfix">
                                    <div class="comment-show-con-img pull-left"><img src="/pingluns/images/header-img-comment_03.png" alt=""></div>
                                    <div class="comment-show-con-list pull-left clearfix">
                                        <div class="pl-text clearfix">
                                            <a href="#" class="comment-size-name">张三 : </a>
                                            <span class="my-pl-con">&nbsp;来啊 造作啊!</span>
                                        </div>
                                        <div class="date-dz">
                                            <span class="date-dz-left pull-left comment-time">2017-5-2 11:11:39</span>
                                            <div class="date-dz-right pull-right comment-pl-block">
                                                <a href="javascript:;" class="removeBlock">删除</a>
                                                <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
                                                <span class="pull-left date-dz-line">|</span>
                                                <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a>
                                            </div>
                                        </div>
                                        <div class="hf-list-con"></div>
                                    </div>
                                </div>
                            </div>
                            <!--回复区域 end-->
                        </div>
                        <script type="text/javascript" src="/pingluns/js/jquery-1.12.0.min.js"></script>
                        <script type="text/javascript" src="/pingluns/js/jquery.flexText.js"></script>
                        <!--textarea高度自适应-->
                        <script type="text/javascript">
                        $(function() {
                            $('.content').flexText();
                        });
                        </script>
                        <!--textarea限制字数-->
                        <script type="text/javascript">
                        function keyUP(t) {
                            var len = $(t).val().length;
                            if (len > 139) {
                                $(t).val($(t).val().substring(0, 140));
                            }
                        }
                        </script>
                        <!--点击评论创建评论条-->
                        <script type="text/javascript">
                        $('.commentAll').on('click', '.plBtn', function() {
                            var myDate = new Date();
                            //获取当前年
                            var year = myDate.getFullYear();
                            //获取当前月
                            var month = myDate.getMonth() + 1;
                            //获取当前日
                            var date = myDate.getDate();
                            var h = myDate.getHours(); //获取当前小时数(0-23)
                            var m = myDate.getMinutes(); //获取当前分钟数(0-59)
                            if (m < 10) m = '0' + m;
                            var s = myDate.getSeconds();
                            if (s < 10) s = '0' + s;
                            var now = year + '-' + month + "-" + date + " " + h + ':' + m + ":" + s;
                            //获取输入内容
                            var oSize = $(this).siblings('.flex-text-wrap').find('.comment-input').val();
                            console.log(oSize);
                            //动态创建评论模块
                            oHtml = '<div class="comment-show-con clearfix"><div class="comment-show-con-img pull-left"><img src="  " alt="">头像</div> <div class="comment-show-con-list pull-left clearfix">名字<div class="pl-text clearfix"> <a href="#" class="comment-size-name">David Beckham : </a> <span class="my-pl-con" name="content">&nbsp;' + oSize + '</span> </div> <div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + now + '</span> <div class="date-dz-right pull-right comment-pl-block"><a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div><div class="hf-list-con"></div></div> </div>';
                            if (oSize.replace(/(^\s*)|(\s*$)/g, "") != '') {
                                $(this).parents('.reviewArea ').siblings('.comment-show').prepend(oHtml);
                                $(this).siblings('.flex-text-wrap').find('.comment-input').prop('value', '').siblings('pre').find('span').text('');
                            }
                        });
                        </script>
                        <!--点击回复动态创建回复块-->
                        <script type="text/javascript">
                        $('.comment-show').on('click', '.pl-hf', function() {
                            //获取回复人的名字
                            var fhName = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
                            //回复@
                            var fhN = '回复@' + fhName;
                            //var oInput = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.hf-con');
                            var fhHtml = '<div class="hf-con pull-left"> <textarea class="content comment-input hf-input" placeholder="" onkeyup="keyUP(this)"></textarea> <a href="javascript:;" class="hf-pl">评论</a></div>';
                            //显示回复
                            if ($(this).is('.hf-con-block')) {
                                $(this).parents('.date-dz-right').parents('.date-dz').append(fhHtml);
                                $(this).removeClass('hf-con-block');
                                $('.content').flexText();
                                $(this).parents('.date-dz-right').siblings('.hf-con').find('.pre').css('padding', '6px 15px');
                                //console.log($(this).parents('.date-dz-right').siblings('.hf-con').find('.pre'))
                                //input框自动聚焦
                                $(this).parents('.date-dz-right').siblings('.hf-con').find('.hf-input').val('').focus().val(fhN);
                            } else {
                                $(this).addClass('hf-con-block');
                                $(this).parents('.date-dz-right').siblings('.hf-con').remove();
                            }
                        });
                        </script>
                        <!--评论回复块创建-->
                        <script type="text/javascript">
                        $('.comment-show').on('click', '.hf-pl', function() {
                            var oThis = $(this);
                            var myDate = new Date();
                            //获取当前年
                            var year = myDate.getFullYear();
                            //获取当前月
                            var month = myDate.getMonth() + 1;
                            //获取当前日
                            var date = myDate.getDate();
                            var h = myDate.getHours(); //获取当前小时数(0-23)
                            var m = myDate.getMinutes(); //获取当前分钟数(0-59)
                            if (m < 10) m = '0' + m;
                            var s = myDate.getSeconds();
                            if (s < 10) s = '0' + s;
                            var now = year + '-' + month + "-" + date + " " + h + ':' + m + ":" + s;
                            //获取输入内容
                            var oHfVal = $(this).siblings('.flex-text-wrap').find('.hf-input').val();
                            console.log(oHfVal)
                            var oHfName = $(this).parents('.hf-con').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
                            var oAllVal = '回复@' + oHfName;
                            if (oHfVal.replace(/^ +| +$/g, '') == '' || oHfVal == oAllVal) {

                            } else {
                                $.getJSON("/pingluns/json/pl./pingluns/json", function(data) {
                                    var oAt = '';
                                    var oHf = '';
                                    $.each(data, function(n, v) {
                                        delete v.hfContent;
                                        delete v.atName;
                                        var arr;
                                        var ohfNameArr;
                                        if (oHfVal.indexOf("@") == -1) {
                                            data['atName'] = '';
                                            data['hfContent'] = oHfVal;
                                        } else {
                                            arr = oHfVal.split(':');
                                            ohfNameArr = arr[0].split('@');
                                            data['hfContent'] = arr[1];
                                            data['atName'] = ohfNameArr[1];
                                        }

                                        if (data.atName == '') {
                                            oAt = data.hfContent;
                                        } else {
                                            oAt = '回复<a href="#" class="atName">@' + data.atName + '</a> : ' + data.hfContent;
                                        }
                                        oHf = data.hfName;
                                    });

                                    var oHtml = '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="#" class="comment-size-name">我的名字 : </a><span class="my-pl-con">' + oAt + '</span></div><div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + now + '</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div></div>';
                                    oThis.parents('.hf-con').parents('.comment-show-con-list').find('.hf-list-con').css('display', 'block').prepend(oHtml) && oThis.parents('.hf-con').siblings('.date-dz-right').find('.pl-hf').addClass('hf-con-block') && oThis.parents('.hf-con').remove();
                                });
                            }
                        });
                        </script>
                        <!--删除评论块-->
                        <script type="text/javascript">
                        $('.commentAll').on('click', '.removeBlock', function() {
                            var oT = $(this).parents('.date-dz-right').parents('.date-dz').parents('.all-pl-con');
                            if (oT.siblings('.all-pl-con').length >= 1) {
                                oT.remove();
                            } else {
                                $(this).parents('.date-dz-right').parents('.date-dz').parents('.all-pl-con').parents('.hf-list-con').css('display', 'none')
                                oT.remove();
                            }
                            $(this).parents('.date-dz-right').parents('.date-dz').parents('.comment-show-con-list').parents('.comment-show-con').remove();

                        })
                        </script>
                        <!--点赞-->
                        <script type="text/javascript">
                        $('.comment-show').on('click', '.date-dz-z', function() {
                            var zNum = $(this).find('.z-num').html();
                            if ($(this).is('.date-dz-z-click')) {
                                zNum--;
                                $(this).removeClass('date-dz-z-click red');
                                $(this).find('.z-num').html(zNum);
                                $(this).find('.date-dz-z-click-red').removeClass('red');
                            } else {
                                zNum++;
                                $(this).addClass('date-dz-z-click');
                                $(this).find('.z-num').html(zNum);
                                $(this).find('.date-dz-z-click-red').addClass('red');
                            }
                        })
                        </script>
                        <!-- 评论结束 -->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <pre>
购买运费如何收取？
单笔订单金额（不含运费）满88元免邮费；不满88元，每单收取10元运费。
(港澳台地区需满500元免邮费；不满500元，每单收取30元运费)
网易严选的订单如何配送？
网易严选会根据商品所在地、顾客所在地和商品的尺寸重量优选物流配送商，确保优质用户体验。目前暂不支持自选快递，具体物流信息可在下单成功后“我的订单-追踪物流”中查看。
如何申请退换货？
1.自收到商品之日起30日内，顾客可申请无忧退货；如果是退货，退款将原路返还，不同的银行处理时间不同，预计1-5个工作日到账；
2.内裤和食品等特殊商品无质量问题不支持退换货；
3.退货流程：
确认收货-申请退货-客服审核通过-用户寄回商品-仓库签收验货-退款审核-退款完成；
4.换货流程：
确认收货-申请换货-客服审核通过-用户寄回商品-仓库签收验货-客服确认-换货完成；
5.退换货运费由网易严选承担（大件商品除外）。上门取件费用由网易严选统一与快递服务商结算，顾客只需将退换货商品交给上门取件快递员寄回。如顾客选择自行寄回商品，请先垫付运费，到货验证商品后，严选将以现金券形式为用户报销运费，不接受单方面到付件。
如何开具发票？
1.请在下单时选择“我要开发票”并填写相关信息（APP仅限2.4.0及以上版本）。开具增值税专用发票需在下单时填写增票资质信息。温馨提示：请确保增票资质信息与贵司税务登记证信息一致，避免因开票信息错误给贵司带来损失。 
2.可选开票内容：
依照国税总局开票法规，严选订单开具纸质发票、电子发票，开票内容为明细；礼品卡开票内容为预付卡；增值税专用发票开票内容为明细。
关于严选相关价格说明？
1.划线价、指导价：商品展示的划线价或指导价可能是商品制造厂商的零售市场指导价、品牌专柜价、商品吊牌价或该商品在严选上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。
2.活动价：如无特殊说明，促销价是商家在划线价、指导价基础上给予的优惠价格。如有疑问，您可以在购买前与客服联系。
3.严选价：严选非会员用户购买的商品详情页显示的售价。
4.会员价：在严选价的基础上给予不同类型会员用户的优惠价格，仅该类会员用户可以以会员价购买该商品。
5.价格异常：因可能存在系统缓存、页面更新延迟等不确定性情况，导致价格显示异常，商品具体售价请以订单结算页价格为准。如您发现异常情况出现，请立即联系我们补正，以便您能顺利购物。
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection