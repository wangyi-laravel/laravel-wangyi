@extends('home.jicheng.touti') @section('content')
 <script type="text/javascript" src="/dianji/js/jquery.1.4.2-min.js"></script>
<body>
	 <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    a,
    img {
        border: 0;
        text-decoration: none;
    }

    body {
        font: 12px/180% Arial, Helvetica, sans-serif, "新宋体";
        background: #E1E7E8;
    }
    /* imageFlow */

    #imageFlow {
        width: 810px;
        height: 390px;
        overflow: hidden;
        position: relative;
        margin: 100px auto 0 auto;
    }

    #imageFlow .diapo {
        position: absolute;
        left: -1000px;
        cursor: pointer;
        overflow: hidden;
    }

    #imageFlow .bank {
        visibility: hidden;
        overflow: hidden;
    }

    #imageFlow ul {
        height: 20px;
        margin: 0 auto;
        width: 100%;
        text-align: center;
    }

    #imageFlow ul li {
        color: #333;
        font-size: 12px;
        text-align: left;
        margin-left: 30%;
        height: 20px;
        line-height: 20px;
        overflow: hidden;
        width: 100%;
        vertical-align: bottom;
    }

    #imageFlow .text {
        position: absolute;
        left: 0px;
        width: 80px;
        bottom: 1%;
        text-align: center;
        color: #333;
        font-family: verdana, arial, Helvetica, sans-serif;
        z-index: 1000;
    }

    #imageFlow .title {
        font-size: 0.9em;
        font-weight: bold;
    }

    #imageFlow .legend {
        font-size: 0.8em;
    }

    #imageFlow .scrollbar {
        position: absolute;
        left: 10%;
        top: 0;
        width: 80%;
        height: 16px;
        z-index: 1;
    }

    #imageFlow .scrollbar img {
        cursor: pointer;
    }

    #imageFlow .track {
        position: absolute;
        left: -55px;
        width: 950px;
        height: 16px;
        top: 0px;
    }

    #imageFlow .arrow-left {
        position: absolute;
        left: -80px;
        z-index: 1;
    }

    #imageFlow .arrow-right {
        position: absolute;
        right: -80px;
        z-index: 1;
    }

    #imageFlow .bar {
        position: absolute;
        height: 16px;
        left: 25px;
        top: 0px;
        cursor: pointer;
    }

    #imageFlow .ProTi {
        color: #ff6600;
        font-weight: bold;
    }

    #imageFlow .ProRmb {
        font-weight: bold;
    }

    #imageFlow .ProMo {
        color: #ff6600;
        cursor: pointer;
    }
    </style>
<!--banner-->
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
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>Categories</h3>
					<ul class="cate">
						<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Best Selling</a> <span>(15)</span></li>
						<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Man</a> <span>(16)</span></li>
							<ul>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Accessories</a> <span>(2)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Coats &amp; Jackets</a> <span>(5)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Jeans</a> <span>(1)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">New Arrivals</a> <span>(0)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Suits</a> <span>(1)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
							</ul>
						<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Sales</a> <span>(15)</span></li>
						<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Woman</a> <span>(15)</span></li>
							<ul>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Accessories</a> <span>(2)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">New Arrivals</a> <span>(0)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Dresses</a> <span>(1)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="products.html">Shorts</a> <span>(4)</span></li>
							</ul>
					</ul>
				</div>
		<!--//menu-->
		<!--price-->
				<div class="price animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>Price Range</h3>
					<div class="price-head">
					<div class="col-md-6 price-head1">
                                        <div class="price-top1">
                                            <span class="price-top">$</span>
                                            <input type="text"  value="0">
                                        </div>
                                    </div>
									<div class="col-md-6 price-head2">
                                        <div class="price-top1">
                                            <span class="price-top">$</span>
                                            <input type="text"  value="500">
                                        </div>
                                    </div>
									<div class="clearfix"></div>
                                    </div>
                                    </div>
			<!--//price-->
			<!--colors-->
			<div class="colors animated wow fadeInLeft animated" data-wow-delay=".5s" >
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
				<div class="col-md-5 grid-im">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="/qiantai/images/si.jpg">
			        <div class="thumb-image"> <img src="C:/xampp/htdocssi/7.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="/qiantai/images/si1.jpg">
			         <div class="thumb-image"> <img src="/qiantai/images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="/qiantai/images/si2.jpg">
			       <div class="thumb-image"> <img src="/qiantai/images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3>Nam liber tempor cum</h3>
				<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">$140.00</span>
				 <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
				 <div class="clearfix"></div>
				</div>
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		   <!----- tabs-box ---->
		<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
									  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>         
							        </div>

							    	</div>
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts1">
					
						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >S, M, L, XL</span>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

								</div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Reviews</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
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
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
<!---->
					</div>
			
</div>
<!----->

<!-- 点击开始 -->

<div class="clearfix"> </div>
<div class=" col-md-si">
						
			 <script type="text/javascript" src="/dianji/js/Flow.js"></script>
    <script type="text/javascript">
    /* ==== create imageFlow ==== */
    if ($.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
        imf.create("imageFlow", 0.78, 1, 5);
        $(document).ready(function() {
            $(".bar").attr("src", "/dianji/images/clear.gif");
            $(".bar").attr("style", "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, src='/dianji/images/sc.png')");
            $(".arrow-left").attr("src", "/dianji/images/clear.gif");
            $(".arrow-left").attr("style", "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, src='/dianji/images/btn_Pro_show_left.png')");
            $(".arrow-right").attr("src", "/dianji/images/clear.gif");
            $(".arrow-right").attr("style", "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, src='/dianji/images/btn_Pro_show_right.png')");
        });
    } else {
        imf.create("imageFlow", 0.5, 1.5, 5);
    }
    </script>
    <div id="imageFlow">
        <div class="bank">
            <a rel='/dianji/images/1090.png' href='http://www.xwcms.net/'>
                <ul>
                    <li class="ProTi">1090笔记本型光学无线鼠标 </li>
                    <li>高精度光学寻迹引擎 </li>
                    <li>无线自由 </li>
                    <li>NANO接收器，即插即忘 </li>
                    <li class="ProMo">了解更多...</li>
                </ul>
            </a>
            <a rel='/dianji/images/1090jzb.png' href='http://www.xwcms.net/'>
                <ul>
                    <li class="ProTi">1090精致版笔记本型光学无线鼠标</li>
                    <li>高精度光学寻迹引擎 </li>
                    <li>无线自由 </li>
                    <li>NANO接收器，即插即忘 </li>
                    <li class="ProMo">了解更多...</li>
                </ul>
            </a>
          
           
            
        </div>
        <div class="scrollbar">
            <img class="arrow-left" src="/dianji/images/btn_Pro_show_left.png" alt="" />
            <img class="arrow-right" src="/dianji/images/btn_Pro_show_right.png" alt="" />
        </div>
    </div>

<!-- 点击结束 -->






		</div>
			<div class="clearfix"></div>
			</div>			
		</div>
				<!--//products-->



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
@endsection