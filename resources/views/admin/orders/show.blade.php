@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  

    <div class="m-auto">
      @include('errors.errors')
      <table class="table table-condensed">
          <tr class="thead-dark">
              <th>Name</th>
              <th>Price</th>
              <th>ref Code</th>
              <th>Date</th>
              <th>Status</th>
          </tr>

          @foreach ($orders as $order)
            <tr>
              <td>{{ $order->user->name }}</td>
              <td>{{ $order->price }} $</td>
              <td>{{ $order->ref_id }}</td>
              <td>{{ $order->created_at }}</td>
              <td>
                <button class="btn btn-success">Paid</button>
              </td>
            </tr>
          @endforeach

      </table>
  </div>

    
    </div>

  @include('admin.js') 