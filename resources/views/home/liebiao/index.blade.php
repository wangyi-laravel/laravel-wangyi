@extends('home.jicheng.touti') @section('content')
<!--banner-->
<style>
.chaochu{
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}
</style>
<div class="banner-top">
    <div class="container">
        <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">商品列表</h2>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//banner-->
<!--content-->
<div class="product">
    <div class="container">
        <div class="col-md-3 product-bottom">
            <!--categories-->

            <!-- 侧边分类 start -->
            <div class="categories animated wow fadeInUp animated" data-wow-delay=".5s">
                <h3>全部分类</h3>
                <ul class="cate">
                    @foreach($cates as $v)
                    @if($v['parent_id'] == 0)
                    <li><i class="glyphicon glyphicon-menu-right"></i>{{$v['name']}}</li>

                    <ul>
                        @if(!empty($v->child)) 
                        @foreach($v->child as $b)
                        <li><i class="glyphicon glyphicon-menu-right"></i><a href="/home/liebiao?cate_id={{$b['id']}}">{{$b['name']}}</a></li>
                        @endforeach 
                        @endif
                    </ul>
                    @endif 
                    @endforeach
                </ul>
            </div>
            <!-- 侧边分类 end -->

            <!--//menu-->
            <div class="sellers animated wow fadeInUp" data-wow-delay=".5s">
                <h3 class="best">新品推荐</h3>
                <div class="product-head">
                    @foreach($good as $v)
                    @if($v['cate_id'] == $cate)
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="/home/xiang?good_id={{$v['id']}}"><img class="img-responsive " src="{{$v['image']}}" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="chaochu"><a href="/home/xiang?good_id={{$v['id']}}">{{$v['title']}}</a></h6>
                            <span class=" price-in1">{{$v['price']}}</span>
                            
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <!---->
        </div>
        <form action="/home/liebiao" method="get">
        <div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
            <div class="mens-toolbar">
                <p style="float: left; margin-top: 12px">筛选商品:</p>
                    <div  style="float: left; width: 200px">
                        <p><input type="text" name="keywords" class="am-form-field" placeholder="{{request()->keywords}}" style="width: 150px"></p><span><button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" ></button></span>
                    </div>
                
                <div class="clearfix"></div>
            </div>
            <div class="mid-popular">
                @foreach($good as $v)
                @if($v['cate_id'] == $cate)
                <input type="hidden" name="cate_id" value="{{$v['cate_id']}}">
                <div class="col-sm-4 item-grid item-gr  simpleCart_shelfItem">
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
                @endif
                @endforeach
            </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div class="clearfix">
</div>
</div>
</div>
<!--//products-->
@endsection