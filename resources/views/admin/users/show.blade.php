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

            <tr>
                <td>hossein</td>
                <td>hossein@gmail.com</td>
                <td>09906880923</td>
                <td>admin</td>
                <td>
                    <button class="btn btn-success">Update</button>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

            <tr>
                <td>hossein</td>
                <td>hossein@gmail.com</td>
                <td>09906880923</td>
                <td>user</td>
                <td>
                    <button class="btn btn-success">Update</button>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

            <tr>
                <td>hossein</td>
                <td>hossein@gmail.com</td>
                <td>09906880923</td>
                <td>admin</td>
                <td>
                    <button class="btn btn-success">Update</button>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

            <tr>
                <td>hossein</td>
                <td>hossein@gmail.com</td>
                <td>09906880923</td>
                <td>user</td>
                <td>
                    <button class="btn btn-success">Update</button>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

        </table>
    </div>


    </div>

  @include('admin.js') 