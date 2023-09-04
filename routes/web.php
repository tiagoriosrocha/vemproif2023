<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\SorteioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

//ROTAS QUE NÃO PRECISAM DE AUTENTICAÇÃO
Route::get('/', function () { return view('home'); });
Route::get('/registro', [UsuarioController::class,'usuarioform']);
Route::get('/ranking', [RankingController::class, 'exibirRanking'])->name('sorteio.ranking');    
Route::get('/executarsorteio',[SorteioController::class, 'executarSorteio'])->name('sorteio.executar');

//ROTAS QUE EXIGEM AUTENTICAÇÃO
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/meuid', [ProfileController::class, 'gerarID'])->name('profile.meuid');

    Route::get('/imageform', [UsuarioController::class, 'imageform'])->name('profile.imageform');
    Route::post('/image', [UsuarioController::class,'uploadfoto'])->name('image.uploadfoto');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/estande/{id}', [EstandeController::class, 'show'])->name('estande.show');
    Route::get('validarpresenca/{id}', [EstandeController::class, 'validarpresenca'])->name('estande.validarpresenca');    
});

require __DIR__.'/auth.php';
