@extends('home.jicheng.touti') @section('content')
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Contact</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>Contact</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="contact">
		<div class="container">
		
			
			<div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
				<form>
						<div class="contact-form2">
							<h4>Name</h4>
							
								<input type="text" placeholder="" required="">
							
						</div>
						<div class="contact-form2">
							<h4>Website</h4>
							
								<input type="text" placeholder="" required="">
						
						</div>
				
						<div class="contact-form2">
							<h4>Email</h4>
						
								<input type="email" placeholder="" required="">
						
						</div>
						<div class="contact-form2">
							<h4>Subject</h4>
						
								<input type="text" placeholder="" required="">
						
						</div>
					
			
				<div class="contact-me ">
					<h4>Message</h4>
				
						<textarea type="text"  placeholder="" required=""> </textarea>
						</div>
						<input type="submit" value="Submit" >
				</form>
				
			</div>
			
			<div class="col-md-4 contact-grids">
				@foreach($setting as $v)
				<div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 ">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Address</h4>
							<p>{{$v['address']}}</p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid4">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Call Us</h4>
							<p>{{$v['phone']}}</p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid5">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Email</h4>
							<p>{{$v['email']}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>


@endsection