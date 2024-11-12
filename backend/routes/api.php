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
        Route::get('/', [DadosController::class, 'start']); // Api que iniciará o programa e armazenará os dados no banco de dados
        Route::get('/elenco', [DadosController::class, 'startElenco']); // Api que armazenará  os dados dos elencos de cada time no banco de dados
        Route::get('/tabela', [TabelaController::class, 'show']); // Api que retornará os dados da tabela de pontuações para o frontend
        Route::get('/jogadores/{id_clube}', [JogadoresController::class, 'show']); // Api que retornará os dados dos jogadores de um time em específico para o frontend
        Route::get('/treinadores/{id_clube}', [TreinadoresController::class, 'show']); // Api que retornará os dados dos treinadores de um time em específico para o frontend
        Route::get('/jogos', [JogoController::class, 'show']); // Retornará os dados de todos jogos para o frontend
        Route::get('/clubes', [ClubeController::class, 'show']); // Retornará os dados dos clubes para o frontend
    });
    
});
