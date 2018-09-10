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
        <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Products</h2>
        <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>Products<label>/</label>Women's</h3>
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
                    <li><i class="glyphicon glyphicon-menu-right"></i>{{$v['name']}}<span>(16)</span></li>

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
            <div class="sellers animated wow fadeInUp" data-wow-delay=".5s">
                <h3 class="best">BEST SELLERS</h3>
                <div class="product-head">
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="images/pcc.jpg" alt=""></a>
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
                            <a href="single.html"><img class="img-responsive " src="images/pcc1.jpg" alt=""></a>
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
            <div class="mens-toolbar">
                <p>Showing 1–9 of 21 results</p>
                <p class="showing">Sorting By
                    <select>
                        <option value=""> Name</option>
                        <option value=""> Rate</option>
                        <option value=""> Color </option>
                        <option value=""> Price </option>
                    </select>
                </p>
                <p>Show
                    <select>
                        <option value=""> 9</option>
                        <option value=""> 10</option>
                        <option value=""> 11 </option>
                        <option value=""> 12 </option>
                    </select>
                </p>
                <div class="clearfix"></div>
            </div>
            <div class="mid-popular">
                @foreach($goods as $v)
                @if($v['cate_id'] == $cate)
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
                            <a href="#" data-text="Add To Cart" class="but-hover1 item_add">添加到购物车</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div class="clearfix">
</div>
</div>
</div>
<!--//products-->
@endsection