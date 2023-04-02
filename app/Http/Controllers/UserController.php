<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User as UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $list = UserModel::all();
        return view('User.index', ['list' => $list]);
    }

    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255', 'min:6'],
            'role' => ['required', 'string'],
        ]);
        $user = new UserModel;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = (int) $request->role;
        $user->save();

        return redirect("/users");
    }

    public function edit($id)
    {
        $user = UserModel::find($id);
        return view("User.edit", compact('user'));
    }

    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255', 'min:6'],
            'role' => ['required', 'string'],
        ]);
        $user = UserModel::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = (int) $request->role;
        $user->save();

        return redirect("/users");
    }

    public function destroy($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect("/users");
    }
}
