<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;

class CommissionsController extends Controller
{
    public function index()
    {
        $commissions = Commission::with('affiliate')
            ->whereHas('affiliate', function ($query) {
                $query->where('active', true);
            })
            ->get();

        return view('commissions.index', compact('commissions'));
    }

    public function create()
    {
        $commissions = Commission::with('affiliate')->get();

        $activeAffiliates = $commissions->filter(function ($commission) {
            return $commission->affiliate && $commission->affiliate->active;
        })->pluck('affiliate')->unique('id')->values();
    
        return view('commissions.create', compact('activeAffiliates'));
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