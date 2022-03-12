@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  
    <div class="m-auto">
        <table class="table table-condensed">
            <tr class="thead-dark">
                <th>Description</th>
                <th>Price</th>
                <th>Current Image</th>
                <th>Action 1</th>
                <th>Action 2</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }} $</td>
                    <td>
                        <img src="/images/{{ $product->image }}" alt="shoesimage" width="100px" height="100px" name="image">
                    </td>

                    <td>
                        <button class="btn btn-success">Update</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>



    
    </div>

  @include('admin.js') 