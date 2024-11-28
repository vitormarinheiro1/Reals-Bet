<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Commission;
use Illuminate\Http\Request;

class CommissionsController extends Controller
{
    public function index(Request $request)
    {
        $commissions = Commission::with('affiliate')
            ->whereHas('affiliate', function ($query) {
                $query->where('active', true);
            })
            ->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');

        return view('commissions.index', compact('commissions'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        $activeAffiliates = Affiliate::where('active', true)->get();

        return view('commissions.create', compact('activeAffiliates'));
    }



    public function store(Request $request)
    {
        $commission = Commission::create($request->all());

        return to_route('commissions.index')->with('mensagem.sucesso', "Comissão para '{$commission->affiliate->name}' adicionada com sucesso");
    }

    public function destroy(Commission $commission)
    {
        $commission->delete();

        return to_route('commissions.index')->with('mensagem.sucesso', "Comissão de '{$commission->affiliate->name}' removida com sucesso!");

    }

}