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
	 
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
 <table class="table animated wow fadeInLeft" data-wow-delay=".5s">
		  <tr>
			<th class="t-head head-it ">Item</th>
			<th class="t-head">Price</th>
			<th class="t-head">Quantity</th>
			<th class="t-head">Total</th>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
				<a href="single.html" class="at-in">
					<img src="/qiantai/images/pcc.jpg" class="img-responsive" alt="">
				</a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
			</div>
				<div class="clearfix"> </div>
				<div class="close1"> </div>
			 </td>
			<td class="t-data">$100.00</td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
			
			</td>
			<td class="t-data">$100.00</td>
			
		  </tr>
		  <tr class="cross1">
		  <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="/qiantai/images/pcc2.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
			</div>
			<div class="clearfix"> </div>
			<div class="close2"> </div></td>
			<td class="t-data">$200.00</td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
							<!--quantity-->
		
			</td>
			<td class="t-data">$200.00</td>
			
		  </tr>
		  <tr class="cross2">
		  <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="/qiantai/images/pcc1.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
			</div>
			<div class="clearfix"> </div>
			<div class="close3"> </div></td>
			<td class="t-data">$150.00</td>
			<td class="t-data">
				<div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						
			</td>
			<td class="t-data">$150.00</td>
			
		  </tr>
	</table>
				<div class=" cart-total">
			
			 <h5 class="continue" >Cart Total</h5>
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
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 <a href="single.html">Produced By Cart</a>
			 
			</div>
			
		
		 </div>
		 </div>!!
		 				<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			


@endsection