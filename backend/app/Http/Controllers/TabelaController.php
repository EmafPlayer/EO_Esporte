<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Tabela;
use Illuminate\Http\Request;

class TabelaController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create($clubes)
    {

        foreach($clubes as $clube){

            // Iniciará a tabela com o id dos times vinculados a ela
            Tabela::create([
                "clube" => $clube['id'],
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
        $tabela = DB::table('tabela_view')->get()->toArray();

        if (count($tabela) == 0) {
            return response()->json(['message' => 'Ainda não possui nenhum jogo na base de dados'], 404);
        }

        // Retornará os dados da tabela de pontuações para a api
        return response()->json(['message' => 'Tabela buscada com sucesso', 'tabela' => $tabela], 200);
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
