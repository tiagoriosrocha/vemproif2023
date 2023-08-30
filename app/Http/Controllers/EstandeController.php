<?php

namespace App\Http\Controllers;

use App\Models\Estande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EstandeController extends Controller
{
    public function show($estandeId)
    {
        $estande = Estande::find($estandeId);
        return view("estande.show",["umEstande" => $estande]);
    }

    public function validarpresenca($estandeId){
        $estande = Estande::find($estandeId);
        
        $userId = Auth::id();
        $user = User::where('id',$userId)->with('estandes')->get()->first();
        $user->estandes()->attach($estande);

        return redirect("/estande/$estandeId")->with('status', 'Estande cadastrado com sucesso!');
    }
}
