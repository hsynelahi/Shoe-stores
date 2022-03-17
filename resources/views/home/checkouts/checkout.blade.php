<!DOCTYPE HTML>
<html>
	<head>
        @include('home.css')
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
	
        @include('home.navbar')

		@include('errors.errors')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<form action="{{ route('home.addorder.add') }}" method="POST" class="colorlib-form">
					@csrf
					<div class="row">

						<div class="col-lg-8">
						
								<h2>Billing Details</h2>
							  <div class="row">
							   
	
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">Full Name</label>
											<input type="text" id="fname" name="name" class="form-control" placeholder="Full Name ..." required>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">E-mail Address</label>
											<input type="text" name="email" id="email" class="form-control" placeholder="State Province" required>
										</div>
									</div>
	
									<div class="col-md-12">
										<div class="form-group">
											<label for="Phone">Phone Number</label>
											<input type="text" name="mobile" id="zippostalcode" class="form-control" required>
										</div>
									</div>
	
								
						   </div>
						
						</div>
	
						<div class="col-lg-4">
							<div class="row">
	
									<div class="col-md-12">
										<div class="cart-detail">
											<h2>Cart Total</h2>
											<ul>
												<li><span>Order Total</span> <span name="amount" >$ {{ $productsPrice }}</span></li>
											</ul>
										</div>
								</div>
	
	
							   <div class="w-100"></div>
	
							   
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<p><button class="btn btn-primary">Order Now</button></p>
								</div>
							</div>
						</div>
	
	
					</div>
					
				</form>
		
			</div>
		</div>

		@include('home.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	@include('home.js')

	</body>
</html>

