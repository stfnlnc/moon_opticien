<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('role_id', 'asc')->get();
        $roles = Role::orderBy('name', 'asc')->get();
        return view('users.index', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    public function create()
    {
        $roles = Role::orderBy('name', 'asc')->get();
        return view('users.create', [
            'roles' => $roles,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return Redirect::route('users.index');
    }

    public function edit(User $user)
    {
        $roles = Role::orderBy('name', 'asc')->get();
        return view('users.edit', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->role()->associate($request->validated('role'))->save();
        return to_route('users.edit', $user)->with('success', 'L\'utilisateur a été modifié');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index')->with('success', 'L\'utilisateur a été supprimé');
    }

}
