@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  
    

        <div class="m-auto">

          @include('errors.errors')

            <form action="{{ route('admin.product.add') }}" method="post" enctype="multipart/form-data">
              @csrf
              
              <label for="" class="mb-2">Description</label>
              <input type="text" name="description" placeholder="Description" class="form-control m-2" required>
              
              <label for="" class="mb-2">price</label>
              <input type="number" name="price" class="form-control m-2" required>

                <label for="" class="mb-2">Image</label>
                <input type="file" name="image" class="m-2" required>

                <button class="btn btn-primary">Add Product</button>
            </form>
        </div>
        
        

    
    </div>

  @include('admin.js') 