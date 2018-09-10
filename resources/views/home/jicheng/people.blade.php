@extends('home.jicheng.touti')
@section('content')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/sj/js/jquery.cxselect.js"></script>

<?php echo \Session::get('success') ?>
<div class="contact">
		<div class="container">
		
			
			<div class="col-md-8 contact-grids1 animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
				<form action="/prople/z" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					@foreach($user as $v)
						<div class="contact-form2">
							<h4>姓名</h4>
							
								<input type="text" placeholder="" required="" name="name" value="{{$v['name']}}">
							
						</div>

						<div class="contact-form2">
							<h4>性别</h4>
						
								<input type="radio" placeholder="" 
									@if($v['sex'] == 0) checked @endif
								required="" name="sex" value="0">男
								<input type="radio" placeholder="" 
									@if($v['sex'] == 1) checked @endif
								required="" name="sex" value="1">女
						
						</div>
						<div class="contact-form2">
							<h4>电话</h4>
							
								<input type="text" placeholder="" required="" name="phone" value="{{$v['phone']}}">
						
						</div>
				
						<div class="contact-form2">
							<h4>头像</h4>
						
								<img src="{{$v['image']}}" width="80px" height="80px">
								<p class="grid1">
								<input type="file"  placeholder="" required="" name="image">
								</p>
						
						</div>
						@endforeach
						<div class="contact-form2">
							<h4>收货人电话</h4>
							
								<input type="text" placeholder="" required="" name="call" value="">
							
						</div>
						<div class="contact-form2">
							<h4>收货地址</h4>
								<label for="user-name" class="am-u-sm-3 am-form-label">收货地址 <span class="tpl-form-line-small-title"></span></label>
                      		 		<div class="am-u-sm-9" id="city_china">
                        				<select class="province" name="sheng">
                        					<option></option>
                        				</select>
	                        			<select class="city" name="shi">
	                        				<option></option>
	                        			</select>
	                        			<select class="area" name="qu">
	                        				<option></option>
	                        			</select>
                        			</div>

						<script>
		                    var urlChina = '/sj/js/cityData.min.json';
		                    $.cxSelect.defaults.url = urlChina;
		                    $('#city_china').cxSelect({
		                        selects: ['province', 'city', 'area']
		                    });
                    	</script>
						</div>
					
				<div class="contact-me ">
				
						<textarea type="text" placeholder="" required="" name="address"> }</textarea>
						</div>
						<input type="submit" value="Submit">
				</form>
			</div>
			
			<div class="col-md-4 contact-grids">
				<div class=" contact-grid animated wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<div class="contact-grid1">
						<div class="contact-grid2 ">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Address</h4>
							<p>12K Street, 45 Building Road <span>New York City.</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid4">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Call Us</h4>
							<p>+1234 758 839<span>+1273 748 730</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid5">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Email</h4>
							<p><a href="contactto:info@example.com">info@example1.com</a><span><a href="contactto:info@example.com">info@example2.com</a></span></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection