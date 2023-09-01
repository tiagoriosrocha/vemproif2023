<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Estande;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    public function show(){
        $listaUsuarios = User::with('estandes')->orderBy('name','asc')->simplePaginate(10);
        //dd($listaUsuarios);
        $listaEstandes = Estande::all();
        return view('sorteio.show',["listaUsuarios" => $listaUsuarios,
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
        
        return view('sorteio.resultado', ["listaAptos" => $listaAptos,
                                          "listaSorteada" => $listaSorteada]);
    }
}
