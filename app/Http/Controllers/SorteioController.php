<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Estande;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    public function exibirRanking(){
        $listaUsuarios = User::with('estandes')->orderBy('name','asc')->simplePaginate(10);
        //dd($listaUsuarios);
        $listaEstandes = Estande::all();
        return view('sorteio.exibir_ranking',["listaUsuarios" => $listaUsuarios,
                                    "listaEstandes" => $listaEstandes]);
    }

    public function executarSorteio(){
        $listaUsuarios = User::with('estandes')->orderBy('name','asc')->get();
        $listaEstandes = Estande::all();

        $listaAptos = collect();
        foreach($listaUsuarios as $user){
            if( $user->estandes->count()*100/$listaEstandes->count() >= env('PERCENTUALSORTEIO')){
                $listaAptos->push($user);    
            }
        }

        $listaSorteada = $listaAptos->shuffle();
        $listaSorteada = $listaAptos->shuffle();
        $listaSorteada = $listaAptos->shuffle();
        
        return view('sorteio.exibir_sorteados', ["listaAptos" => $listaAptos,
                                          "listaSorteada" => $listaSorteada]);
    }
}
