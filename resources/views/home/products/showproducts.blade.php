<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>

        
          @foreach ($products as $product)
            <div class="row row-pb-md w-100">
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="{{ route('home.productDetail.show') }}" class="prod-img">
                            <img src="/images/{{ $product->image }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="{{ route('home.productDetail.show') }}">{{ $product->description }}</a></h2>
                            <span class="price">{{ $product->price }}</span>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="w-100"></div>
          @endforeach   
       

        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>