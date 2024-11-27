<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return to_route('users.index');

    }

    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->save();

        return to_route('users.index');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }

    public function toggleActive(User $user)
    {
        $user->active = !$user->active;
        $user->save();

        return back()->with('success', 'Status do usuário atualizado com sucesso!');
    }

}
