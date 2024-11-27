<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AffiliatesController extends Controller
{
    public function index()
    {
        $affiliates = Affiliate::all();

        return view('affiliates.index')->with('affiliates', $affiliates);
    }

    public function create()
    {
        return view('affiliates.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        $affiliate = Affiliate::create($data);

        Auth::login($affiliate);

        return to_route('affiliates.index');

    }

    public function edit(Affiliate $affiliate)
    {
        return view('affiliates.edit')->with('affiliate', $affiliate);
    }

    public function update(Request $request, Affiliate $affiliate)
    {
        $affiliate->fill($request->all());
        $affiliate->save();

        return to_route('affiliates.index');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }

    public function toggleActive(Affiliate $affiliate)
    {
        $affiliate->active = !$affiliate->active;
        $affiliate->save();

        return back()->with('success', 'Status do afiliado atualizado com sucesso!');
    }

}
