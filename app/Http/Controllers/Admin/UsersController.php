<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showusers()
    {
        return view('admin.users.show');
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

    public function editusers()
    {

    }

    public function updateusers()
    {

    }

    public function deleteusers()
    {

    }
}
