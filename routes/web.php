<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SorteioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('profile.cadastrousuario');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/imageform', [ProfileController::class, 'imageform'])->name('profile.imageform');
    Route::post('/image', [ProfileController::class,'uploadfoto'])->name('image.uploadfoto');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/estande/{id}', [EstandeController::class, 'show'])->name('estande.show');

    Route::get('validarpresenca/{id}', [EstandeController::class, 'validarpresenca'])->name('estande.validarpresenca');    
});

Route::get('/ranking', [SorteioController::class, 'show'])->name('sorteio.ranking');    
Route::get('/executarsorteio',[SorteioController::class, 'executarSorteio'])->name('sorteio.executar');


require __DIR__.'/auth.php';
