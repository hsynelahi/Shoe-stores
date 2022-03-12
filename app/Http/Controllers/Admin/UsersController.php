<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Http\Requests\Admin\Users\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showusers()
    {
        $users = User::all();
        return view('admin.users.show',compact('users'));
    }

    public function addusersshow()
    {
        
        return view('admin.users.addusersshow');
    }

    public function addusers(StoreRequest $request)
    {
        $validatedData = $request->validated();

        $createUsers = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'role' => $validatedData['role'],
        ]);

        if(!$createUsers)
        {
            return back()->with('error','Error : Failed to Add User');
        }
        return back()->with('success','User Added Successfully');
    
    }

    public function editusers($id)
    {
        $user = User::find($id);
        return view('admin.users.editusers',compact('user'));
    }

    public function updateusers(UpdateRequest $request, $id)
    {
        $validatedData = $request->validated();

        $user = User::find($id);

        $updatedUser = $user -> update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'role' => $validatedData['role'],
        ]);

        if(!$updatedUser)
        {
            return back()->with('error','Error : Failed to Update Users');
        }
        return back()->with('success','User Updated Successfully');
    }

    public function deleteusers($id)
    {
        $user = User::find($id);

        $user->delete();

        if(!$user)
        {
            return back()->with('error','Error : Faild to Delete User, Somthing might be Wrong');
        }
        return back()->with('success','User Deleted Successfully');
    }
}
