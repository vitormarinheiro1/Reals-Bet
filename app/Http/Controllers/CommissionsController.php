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
}
