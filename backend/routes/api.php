<?php

use App\Http\Controllers\ClubeController;
use App\Http\Controllers\DadosController;
use App\Http\Controllers\ElencoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\JogadoresController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\TabelaController;
use App\Http\Controllers\TreinadoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {

    Route::prefix('inicio')->group(function () {
        Route::get('/', [DadosController::class, 'start']);
        Route::get('/elenco', [DadosController::class, 'startElenco']);
        Route::get('/tabela', [TabelaController::class, 'show']);
        Route::get('/jogadores/{id_clube}', [JogadoresController::class, 'show']);
        Route::get('/treinadores/{id_clube}', [TreinadoresController::class, 'show']);
        Route::get('/jogos', [JogoController::class, 'show']);
        Route::get('/clubes', [ClubeController::class, 'show']);
    });
    
});
