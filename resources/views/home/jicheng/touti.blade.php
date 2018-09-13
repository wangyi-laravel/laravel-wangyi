@section('header')
<!DOCTYPE html>
<html>
<?php 
    $good = \App\Good::all();
    $link = \App\Link::all();
    $setting = \App\Setting::all();
    $cates = \App\Cates::all();
    $goods = \App\Good::orderBy('id','desc');
    
?>

<head>
    <title>Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- //for-mobile-apps -->
    <link href="/qiantai/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/qiantai/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="/qiantai/js/jquery.min.js"></script>
    <!-- //js -->
    <!-- 评论引入 -->
     
    <!-- 评论结束 -->
    <!-- cart -->
    <script src="/qiantai/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="/qiantai/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <!-- animation-effect -->
    <link href="/qiantai/css/animate.min.css" rel="stylesheet">
    <script src="/qiantai/js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <!-- //animation-effect -->
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/assets/css/admin.css">
  <link rel="stylesheet" href="/assets/css/app.css">


    <style type="text/css">
        .multi{
            width:2px;
        }
        
    </style>
</head>

<body>
    <style>
.chaochu{
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}
</style>
    <!-- header -->
    <div class="header">
        <div class="header-grid">
            <div class="container">
                <div class="header-left animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    @foreach($setting as $v)
                    <ul>
                        <li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
                        <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">{{$v['email']}}</a></li>
                        <li><i class="glyphicon glyphicon-earphone"></i>{{$v['phone']}}</li>
                    </ul>
                    @endforeach
                </div>
                <div class="header-right animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <div class="header-right1 " style="float:left;margin-left:-175px;">
                        <ul>
                            @if(!Session::has('id'))
                            <li><i class="glyphicon glyphicon-log-in"></i><a href="/login">登录</a></li>
                            <li><i class="glyphicon glyphicon-book"></i><a href="/register">注册</a></li>
                            @endif @if(Session::has('id'))
                            <li><a href="/home/people/{{session('id')}}">个人信息</a></li>
                            <li></i><a href="/home/site">收货地址</a></li>
                            <li><a href="/home/logout">退出</a></li>
                            <li>{{Session::get('username')}}<img src="{{Session::get('image')}}" style="border-radius:50%;width:40px;height:40px;margin-left:3px;" ></li>
                            @endif
                        </ul>
                    </div>
                    @if(Session::has('id'))
                    <div class="header-right2">
                        <div class="cart box_1">
                            <a href="/home/cart_items">
                                <h3> <div class="total">
                                <span class="simpleCart_total">$140.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">1</span> items)</div>
                                <img src="images/cart.png" alt="">
                            </h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                            <div class="clearfix" ></div>

                        </div>
                        
                    </div>
                    @endif
                    <div class="clearfix" style="margin-right:0px;"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <div class="logo-nav">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand logo-nav-left ">
                            <h1 class="animated wow pulse animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: pulse;"><a href="/">武'装'<span>大师</span></a></h1>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/" class="act">Home</a></li>
                            <!-- Mega Menu -->
                            @foreach($cates as $v) @if($v['parent_id'] == 0)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{$v['name']}} <b class="caret"></b></a>
                                <ul class="dropdown-menu multi">
                                    <div class="row">
                                        <div class="col-sm-4" >
                                            <ul class="multi-column-dropdown" >
                                                @if(!empty($v->child)) @foreach($v->child as $b)
                                                <li style="float: left;"><a href="/home/liebiao?cate_id={{$b['id']}}" >{{$b['name']}}</a></li>
                                                @endforeach @endif
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row-top">
                                        <div class="col-sm-6 row1">
                                            <a href="products.html"><img src="images/me.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class=" col-sm-6 row2">
                                            <a href="products.html"><img src="images/me1.jpg" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            @endif @endforeach
                            <li><a href="codes.html"> Codes</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- //header -->
    @show 
    @section('content')
    <!-- banner -->
    <div class="banner">
        <div class="banner-right">
            <div class="nbs-flexisel-container">
                <div class="nbs-flexisel-inner">
                    <ul id="flexiselDemo2" class="nbs-flexisel-ul" style="left: -443px; display: block;">
                        @foreach($good as $v)
                        <li class="nbs-flexisel-item" style="width: 443px;">
                            <div class="banner-grid">
                                <h2 class="chaochu">新品推荐</h2>
                                <div class="wome">
                                    <a href="/home/xiang?good_id={{$v['id']}}"><img class="img-responsive" src="{{$v['image']}}" alt="">
                                </a>
                                    <div class="women simpleCart_shelfItem">
                                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                                        <h6 class="chaochu"><a href="/home/xiang?good_id={{$v['id']}}">{{$v['title']}}</a></h6>
                                        <p class="ba-price">
                                            <em class="item_price">{{$v['price']}}</em></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo2").flexisel({
                    visibleItems: 1,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 5000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 1
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 1
                        }
                    }
                });

            });
            </script>
            <script type="text/javascript" src="/qiantai/js/jquery.flexisel.js"></script>
        </div>
    </div>
    </div>
    <!-- //banner -->
    <!--content-->
    <div class="content">
        <div class="content-head">
            <div class="col-md-12 col-m1 animated wow fadeInLeft" data-wow-delay=".1s">
                <div class="col-1">
                    <div class="col-md-6">
                        <a href="https://clot.com/"><img src="/qiantai/images/CLOT.jpg" class="img-responsive" alt="" width="450px" height="300px">
                            </a></div>
                    <div class="col-md-6 col-p">
                        <h5>CLOT</h5>
                        <p>CLOT是香港著名艺人陈冠希创办的凝结集团（CLOT FAMILY）的简称及该公司旗下潮流服装品牌名称。凝结集团是一个LIFESTYLE的公司，由香港著名艺人陈冠希创办于2003年6月。主要以创作服装（包括CLOT品牌服装以及在香港的JUICE店铺）、策划PARTY、帮助服装公司做Consultant等。CLOT品牌服装是中国第一潮牌，在全球潮流品牌中占有一席之地。</p>
                        <a href="single.html" class="shop" data-hover="Shop Now">Shop Now</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- <div class="col-1">
                    <div class="col-md-6 col-p">
                        <h5>For All Collections</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        <a href="single.html" class="shop" data-hover="Shop Now">Shop Now</a>
                    </div>
                    <div class="col-md-6">
                        <a href="single.html"><img src="/qiantai/images/pi.jpg" class="img-responsive" alt="">
                            </a></div>
                    <div class="clearfix"> </div>
                </div> -->
            </div>
            <div class="col-md-6 col-m2 animated wow fadeInRight" data-wow-delay=".1s">
                <!---->
                <!-- requried-jsfiles-for owl -->
                <link href="/qiantai/css/owl.carousel.css" rel="stylesheet">
                <script src="/qiantai/js/owl.carousel.js"></script>
                <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items: 2,
                        lazyLoad: false,
                        autoPlay: true,
                        navigation: true,
                        navigationText: true,
                        pagination: false,
                    });
                });
                </script>
                <!-- //requried-jsfiles-for owl -->
                <!-- start content_slider -->
                <!-- <div id="owl-demo" class="owl-carousel">
                    <div class="item">
                        <a href="single.html"><img class="img-responsive" src="/qiantai/images/ppc.png" alt="" /></a>
                        <a href="single.html" class="shop-2">Shop Now</a>
                    </div>
                    <div class="item">
                        <a href="single.html"><img class="img-responsive" src="/qiantai/images/ppc1.png" alt="" /></a>
                        <a href="single.html" class="shop-2">Shop Now</a>
                    </div>
                    <div class="item">
                        <a href="single.html"><img class="img-responsive" src="/qiantai/images/bb.png" alt="" /> </a>
                        <a href="single.html" class="shop-2">Shop Now</a>
                    </div>
                    <div class="item">
                        <a href="single.html"><img class="img-responsive" src="/qiantai/images/bb1.png" alt="" /></a>
                        <a href="single.html" class="shop-2">Shop Now</a>
                    </div>
                </div> -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---->
    <div class="content-top">
        <div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
            <div class="col-3">
                <a href="single.html"><img src="/qiantai/images/woman.jpg" class="img-responsive " alt="" width="100%">
                            <div class="col-pic">   
                                <h5> 女士专区</h5>
                                <p>轻松搭配让你与众不同</p>
                            </div></a>
            </div>
        </div>
        <div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
            <div class="col-sm-4 item-grid simpleCart_shelfItem">
                <div class="grid-pro">
                    <div class=" grid-product ">
                        <figure>
                            <a href="single.html">
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </figure>
                    </div>
                    <div class="women">
                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <p>
                            <del>$100.00</del><em class="item_price">$70.00</em></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 item-grid simpleCart_shelfItem">
                <div class="grid-pro">
                    <div class=" grid-product ">
                        <figure>
                            <a href="single.html">
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr3.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr2.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </figure>
                    </div>
                    <div class="women">
                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <p>
                            <del>$100.00</del><em class="item_price">$70.00</em></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 item-grid simpleCart_shelfItem">
                <div class="grid-pro">
                    <div class=" grid-product ">
                        <figure>
                            <a href="single.html">
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr5.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr4.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </figure>
                    </div>
                    <div class="women">
                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <p>
                            <del>$100.00</del><em class="item_price">$70.00</em></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!----->
    <!---->
    <div class="content-top">
        <div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
            <div class="col-sm-4 item-grid simpleCart_shelfItem">
                <div class="grid-pro">
                    <div class=" grid-product ">
                        <figure>
                            <a href="single.html">
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr6.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr7.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </figure>
                    </div>
                    <div class="women">
                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <p>
                            <del>$100.00</del><em class="item_price">$70.00</em></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 item-grid simpleCart_shelfItem">
                <div class="grid-pro">
                    <div class=" grid-product ">
                        <figure>
                            <a href="single.html">
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr9.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr8.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </figure>
                    </div>
                    <div class="women">
                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <p>
                            <del>$100.00</del><em class="item_price">$70.00</em></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 item-grid simpleCart_shelfItem">
                <div class="grid-pro">
                    <div class=" grid-product ">
                        <figure>
                            <a href="single.html">
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr10.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img src="/qiantai/images/pr11.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </figure>
                    </div>
                    <div class="women">
                        <a href="#"><img src="/qiantai/images/ll.png" alt=""></a>
                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                        <p>
                            <del>$100.00</del><em class="item_price">$70.00</em></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
            <div class="col-3">
                <a href="single.html"><img src="/qiantai/images/man.jpg" class="img-responsive " alt="" width="700px">
                            <div class="col-pic">
                                <h5> 男士专区</h5>
                                <p>穿上新衣告别青涩油腻</p>
                            </div></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    @show @section('products')
    <!--products-->
    <div class="social animated wow fadeInDown" data-wow-delay=".1s">
        <div class="container">
            @foreach($link as $v)
            <div class="col-sm-3 social-ic">
                <a href="{{$v['url']}}">{{$v['name']}}</a>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
    @show @section('footer')
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-9 footer-top1">
                    <h4>与我一起开创'武装'新时代</h4>
                    <p>一直以来,你们都在想办法跟上潮流的脚步.却不懂如何创新.加入我们,创造属于自己的潮流! 今天开始做潮流的主人. 武'装'大师,期待你的加入
                    </p>
                </div>
                <div class="col-md-3 footer-top2">
                    <a href="contact.html">加入我们</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="footer-grids">
                @foreach($setting as $v)
                <div class="col-md-4 footer-grid animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <h3>{{$v['author']}}</h3>
                    <p>{!!$v['jianjie']!!}</p>
                </div>
                <div class="col-md-4 footer-grid animated wow fadeInLeft animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                    <h3>联系我们</h3>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i>{{$v['address']}}</li>
                        <li class="foot-mid"><i class="glyphicon glyphicon-envelope"></i><a href="mailto:{{$v['email']}}">{{$v['email']}}</a></li>
                        <li><i class="glyphicon glyphicon-earphone"></i>{{$v['phone']}}</li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grid animated wow fadeInLeft animated" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                    <h3>Sign up for newsletter </h3>
                    <form>
                        <input type="text" placeholder="Email" required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="clearfix"> </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- //footer -->
    <script src="/qiantai/js/imagezoom.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script defer src="/qiantai/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="/qiantai/css/flexslider.css" type="text/css" media="screen" />
    <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
    </script>
    @show
</body>

</html>