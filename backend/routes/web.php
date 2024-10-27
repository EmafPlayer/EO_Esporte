<?php

use App\Http\Controllers\DadosController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\JogadoresController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\TabelaController;
use App\Http\Controllers\TreinadoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function () {
    Route::get('/inicio', [DadosController::class, 'start']);
    Route::get('/inicio/tabela', [TabelaController::class, 'show']);
    Route::get('/inicio/jogadores/{id_clube}', [JogadoresController::class, 'show']);
    Route::get('/inicio/treinador/{id_clube}', [TreinadoresController::class, 'show']);
    Route::get('/inicio/jogos', [JogoController::class, 'show']);
});
