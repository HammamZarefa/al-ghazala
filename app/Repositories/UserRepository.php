<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\Role;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserRepository implements UserRepositoryInterface{

    public function index()
    {
        $user = User::all();
        return view('admin.user.index',[
            'user' => $user
        ]);
    }

    public function create()
    {
        $roles = Role::all();
       return view ('admin.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:8"
        ])->validate();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect()->route('admin.user')->with('success', 'Data added successfully');
        }else {

            return redirect()->route('admin.user.create')->with('error', 'Data failed to add');

           }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit',[
            'user' => $user
        ]);
    }

    public function update($request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ( $user->save()) {

            return redirect()->route('admin.user')->with('success', 'Data updated successfully');

           } else {

            return redirect()->route('admin.user.edit')->with('error', 'Data failed to update');

           }
    }

    public function changepassword($request, $id)
    {
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);

        if ( $user->save()) {

            return redirect()->route('admin.user')->with('success', 'Password updated successfully');

           } else {

            return redirect()->route('admin.user')->with('error', 'Password failed to update');

           }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.user')->with('success', 'Data deleted successfully');
    }
}
