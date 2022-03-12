@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  
    <div class="m-auto">
        @include('errors.errors')
        <table class="table table-condensed">
            <tr class="thead-dark">
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Role</th>
                <th>Action 1</th>
                <th>Action 2</th>
            </tr>

            @foreach ($users as $user)           
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <button class="btn btn-success">Update</button>
                    </td>
                    <td>
                        <form action="{{ route('admin.users.deleteusers',$user->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


    </div>

  @include('admin.js') 