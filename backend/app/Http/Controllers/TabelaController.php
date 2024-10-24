<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use App\Models\Tabela;
use Illuminate\Http\Request;

class TabelaController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create($clubes)
    {
        
        for($i = 0; $i < count($clubes); $i++){

            Tabela::create([
                "clube" => $clubes[$i]['id'],
                "pontos" => 0,
                "jogos" => 0,
                "vitorias" => 0,
                "empates" => 0,
                "derrotas" => 0,
                "gols_pros" => 0,
                "gols_contras" => 0,
                "saldo_gols" => 0
            ]);

        }

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tabela $tabela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tabela $tabela)
    {
        //
    }
}
