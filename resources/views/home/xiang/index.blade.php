@extends('home.jicheng.touti') @section('content')
<!--banner-->
<style>
.chaochu{
    overflow: hidden;
    text-overflow:ellipsis;
    white-space: nowrap;
}
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
                            <div class="thumb-image"> <img src="{{$good['image']}}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 single-top-in">
                <div class="span_2_of_a1 simpleCart_shelfItem">
                    <br>
                    <h4>{{$good['title']}}</h4>
                    <hr>
                    <div class="price_single">
                        <span class="reducedfrom item_price">{{$good['price']}}</span>
                        <a href="#" data-text="Add To Cart" class="but-hover1 item_add">加入购物车</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>商品描述</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>商品规格</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>商品描述</h2>
                            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="facts">
                                    <p>
                                        {!!$good['miaoshu']!!}
                                    </p>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>商品规格</h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts1">
                                    <div class="color">
                                        <p>颜色</p>
                                        @foreach($colors as $v) @if(in_array($v->id, $good->colors()->pluck('id')->toArray()))
                                        <label style="font-size: 14px;font-weight: normal;margin-right: 10px;">
                                            <input type="radio" name="size_id[]" value="{{$v['id']}}">{{$v['name']}}</label>
                                        @endif @endforeach
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="color">
                                        <p>尺码</p>
                                        @foreach($sizes as $v) @if(in_array($v->id, $good->sizes()->pluck('id')->toArray()))
                                        <label style="font-size: 14px;font-weight: normal;margin-right: 10px;">
                                            <input type="radio" name="size_id[]" value="{{$v['id']}}">{{$v['name']}}</label>
                                        @endif @endforeach
                                        <div class="clearfix"></div>
                                    </div>
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
            <!----->
            <div class="clearfix"> </div>
            <div class=" col-md-si">

                @foreach($goods as $v)
                @if($v['cate_id'] == $good['cate_id'] && $v['id'] != $good['id'])
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
                            <a href="/home/cart_items" data-text="Add To Cart" class="but-hover1 item_add">添加到购物车</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="clearfix"> </div>

            </div>
            <hr>
            <div class="good-content">{!!$good['content']!!}</div>
        </div>
    </div>
    @endsection