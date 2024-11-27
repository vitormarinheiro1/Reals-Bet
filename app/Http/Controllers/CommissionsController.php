<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;

class CommissionsController extends Controller
{
    public function index()
    {
        $commissions = Commission::with('affiliate')->get();

        return view('commissions.index', compact('commissions'));
    }

    public function create()
    {
        $commissions = Commission::with('affiliate')->get();

        return view('commissions.create', compact('commissions'));
    }

    public function store(Request $request)
    {
        Commission::create($request->all());

        return to_route('commissions.index');
    }

    public function destroy(Commission $commission)
    {
        $commission->delete();

        return to_route('commissions.index');
    }

}