<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\TabelaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function () {
    Route::get('/inicio', [InicioController::class, 'inicio']);
    Route::get('/inicio/tabela', [TabelaController::class, 'show']);
    Route::get('/inicio/jogos', [JogoController::class, 'show']);
});
