<?php

namespace App\Http\Controllers;

use App\Models\User;
use Arr;
use DB;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);
        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
//        $user->assignRole($request->input('role'));

        return redirect()->route('users.index');
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,  ' . $id,
            'password' => 'same:confirm-password',
//            'role' => 'required',
        ]);

        $input = $request->all();

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
//        DB::table('model_has_roles')->where('model_id', $id)->delete();
//        $user->assignRole($request->input('role'));
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index');
    }
}
