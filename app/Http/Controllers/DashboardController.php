<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;
use \App\Models\Estande;

class DashboardController extends Controller
{
    public function dashboard(){
        $userId = Auth::id();
        $user = User::where('id',$userId)->with('estandes')->get()->first();
        $listaEstandes = Estande::all();
        return view('dashboard',['listaEstandes' => $listaEstandes,
                                 'listaEstandesVisitadas' => $user->estandes]);
    }
}
