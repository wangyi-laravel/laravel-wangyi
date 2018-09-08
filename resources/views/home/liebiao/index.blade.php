@extends('home.jicheng.touti')

@section('content')
<!--banner-->
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
						<p >Showing 1–9 of 21 results</p>
	                
					 <p class="showing">Sorting By
			            <select>
			                  <option value=""> Name</option>
			                  <option value="">  Rate</option>
			                    <option value=""> Color </option>
			                    <option value=""> Price </option>
			            </select>
			          </p> 
					  <p>Show
			            <select>
			                  <option value=""> 9</option>
			                  <option value="">  10</option>
			                    <option value=""> 11 </option>
			                    <option value=""> 12 </option>
			            </select>
			          </p>
	    		    
    	      
                	<div class="clearfix"></div>		
		        </div>

			<div class="mid-popular">
				<div class="col-sm-4 item-grid item-gr  simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr1.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr3.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr2.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr5.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr4.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr12.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr13.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr15.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr14.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr17.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr16.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr19.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr18.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr21.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr20.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >
									<figure>		
										<a href="single.html">
											<div class="grid-img">
												<img  src="images/pr23.jpg" class="img-responsive" alt="">
											</div>
											<div class="grid-img">
												<img  src="images/pr22.jpg" class="img-responsive"  alt="">
											</div>			
										</a>		
									</figure>	
								</div>
								<div class="women">
									<a href="#"><img src="images/ll.png" alt=""></a>
									<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
									<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
									<a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
								</div>
							</div>
						</div>
					<div class="clearfix"></div>
				</div>
			</div>

		
			</div class="clearfix"></div>
			</div>			
		</div>
				<!--//products-->
@endsection