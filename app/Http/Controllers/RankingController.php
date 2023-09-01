<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estande;

class RankingController extends Controller
{
    public function exibirRanking(){
        $listaUsuarios = User::with('estandes')->orderBy('name','asc')->simplePaginate(10);
        //dd($listaUsuarios);
        $listaEstandes = Estande::all();
        return view('sorteio.exibir_ranking',["listaUsuarios" => $listaUsuarios,
                                    "listaEstandes" => $listaEstandes]);
    }
}


