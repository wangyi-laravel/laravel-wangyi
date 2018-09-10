<!DOCTYPE html>
<html>
<head>
<title>Single</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/qiantai/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/qiantai/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="/qiantai/js/jquery.min.js"></script>
<!-- //js -->
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
</head>
	
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
        margin: 0px auto 0 50px;
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
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>
						
					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
					<ul>
		
						<li><i class="glyphicon glyphicon-log-in" ></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" ></i><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="header-right2">
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="/qiantai/images/cart.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
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
						 <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Classic<span>Style</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="index.html" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>
												
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Bags</a></li>
												<li><a href="products.html">Caps & Hats</a></li>
												<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="products.html">Jackets & Coats</a></li>
												<li><a href="products.html">Jeans</a></li>
												<li><a href="products.html">Jewellery</a></li>
												<li><a href="products.html">Jumpers & Cardigans</a></li>
												<li><a href="products.html">Leather Jackets</a></li>
												<li><a href="products.html">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="products.html">Shirts</a></li>
												<li><a href="products.html">Shoes, Boots & Trainers</a></li>
												<li><a href="products.html">Sunglasses</a></li>
												<li><a href="products.html">Sweatpants</a></li>
												<li><a href="products.html">Swimwear</a></li>
												<li><a href="products.html">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products.html"><img src="/qiantai/images/me.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products.html"><img src="/qiantai/images/me1.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>
												
												<li><a href="products1.html">Accessories</a></li>
												<li><a href="products1.html">Bags</a></li>
												<li><a href="products1.html">Caps & Hats</a></li>
												<li><a href="products1.html">Hoodies & Sweatshirts</a></li>
										
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="products1.html">Jackets & Coats</a></li>
												<li><a href="products1.html">Jeans</a></li>
												<li><a href="products1.html">Jewellery</a></li>
												<li><a href="products1.html">Jumpers & Cardigans</a></li>
												<li><a href="products1.html">Leather Jackets</a></li>
												<li><a href="products1.html">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="products1.html">Shirts</a></li>
												<li><a href="products1.html">Shoes, Boots & Trainers</a></li>
												<li><a href="products1.html">Sunglasses</a></li>
												<li><a href="products1.html">Sweatpants</a></li>
												<li><a href="products1.html">Swimwear</a></li>
												<li><a href="products1.html">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products1.html"><img src="/qiantai/images/me2.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products1.html"><img src="/qiantai/images/me3.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							<li><a href="codes.html"> Codes</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
		</div>
	</div>
<!-- //header -->
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
			        <div class="thumb-image"> <img src="/qiantai/images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
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
<div class="clearfix"> </div>
<div class=" col-md-si">
						

  <script type="text/javascript" src="/dianji/js/Flow.js"></script>
    <script type="text/javascript">
    
    imf.create("imageFlow", 0.5, 1.5, 5);
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




					
		</div>
		
			</div>			
		</div>





		===========================
				<!--//products-->
<div class="social animated wow fadeInUp" data-wow-delay=".1s">
	<div class="container">
		<div class="col-sm-3 social-ic">
			<a href="#">FACEBOOK</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">TWITTER</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">GOOGLE+</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">PINTEREST</a>
		</div>
	<div class="clearfix"></div>
	</div>
</div>

<!-- footer -->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		<div class="col-md-9 footer-top1">
		<h4>Duis aute irure dolor in reprehenderit in voluptate </h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.Excepteur sint occaecat cupidatat 
						non proident Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
		</div>
		<div class="col-md-3 footer-top2">
		<a href="contact.html">Contact Us</a>
		</div>
		<div class="clearfix"> </div>
		</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" ></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".7s">
				<h3>Sign up for newsletter </h3>
				<form>
					<input type="text" placeholder="Email"  required="">
					<input type="submit" value="Submit">
				</form>
			
				</div>
			
				<div class="clearfix"> </div>
			</div>
			
			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
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


</body>
</html>