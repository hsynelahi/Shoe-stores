@include('admin.css')
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
  


    <div class="m-auto">

        @include('errors.errors')

          <form action="{{ route('admin.users.addusers') }}" method="post">
            @csrf
            
            <label for="" class="mb-2">Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control m-2" required>
            
            <label for="" class="mb-2">Email</label>
            <input type="email" name="email" class="form-control m-2" required>

              <label for="" class="mb-2">Mobile</label>
              <input type="text" name="mobile" class="form-control m-2" required>

              <label for="" class="d-block">Role</label>
              <select name="role" class="form-control m-2">
                  <option value="user">User</option>
                  <option value="admin">Admin</option>
              </select>
              <button class="btn btn-primary">Add User</button>
          </form>
      </div>

    
    </div>

  @include('admin.js') 