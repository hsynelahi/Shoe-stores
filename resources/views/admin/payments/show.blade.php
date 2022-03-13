@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  
    
    <div class="m-auto">
        @include('errors.errors')
        <table class="table table-condensed">
            <tr class="thead-dark">
                <th>order_id</th>
                <th>Name</th>
                <th>Price</th>
                <th>ref Code</th>
                <th>gateway</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            @foreach ($payments as $payment)
                <tr>
                    <td>3</td>
                    <td>{{ $payment->order->user->name }}</td>
                    <td>{{ $payment->order->amount }} $</td>
                    <td>{{ $payment->res_id }}</td>
                    <td>{{ $payment->gateway }}</td>
                    <td>
                        <button class="btn btn-success">paid</button>
                    </td>
                    <td>{{ $payment->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>



    
    </div>

  @include('admin.js') 