<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsuarioController extends Controller
{
    public function usuarioform(){
        return view('usuario.cadastrousuario');
    }
    
    public function imageform(){
        return view('usuario.carregarfoto');
    }
}
