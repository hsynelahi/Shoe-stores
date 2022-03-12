@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  
    

        <div class="m-auto">

          @include('errors.errors')

            <form action="{{ route('admin.product.update',$product->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              
              <label for="" class="mb-2">Description</label>
              <input type="text" name="description" placeholder="Description" class="form-control m-2" value="{{ $product->description }}">
              
              <label for="" class="mb-2">price</label>
              <input type="number" name="price" class="form-control m-2" value="{{ $product->price }}">

                <label for="" class="mb-2">Current Image</label>
                <img src="/images/{{ $product->image }}" width="100px" height="100px">

                <label for="" class="mb-2 ml-2">New Image</label>
                <input type="file" name="image" class="m-2">

                <button class="btn btn-primary">Update Product</button>
            </form>
        </div>
        
        

    
    </div>

  @include('admin.js') 