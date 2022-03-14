<!DOCTYPE HTML>
<html>
	

@include('home.css')
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

        @include('home.navbar')

		@include('home.slide')


		@include('home.shop')



		@include('home.products.showproducts')

		
        @include('home.logo')
        

        @include('home.footer')
	</div>


    @include('home.gototop')
	
@include('home.js')

