<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if ($user && !$user->active) {
            return redirect()->back()->withErrors(['email' => 'Este usuário está inativo.']);
        }

        // Se o usuário estiver ativo, tente autenticar
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors(['email' => 'Usuário ou senha inválidos.']);
        }
        return to_route('users.index');
    }
}
