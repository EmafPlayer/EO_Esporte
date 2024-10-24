<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Http\Controllers\ClubeController;
use App\Models\Clube;
use Carbon\Carbon;

class JogoController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create($jogos)
    {

        for($i = 0; $i < count($jogos); $i++){

            for($j = 0; $j < count($jogos[0]); $j++){

                $dataConvertida = Carbon::parse($jogos[$i][$j]['data_realizacao'])->format('Y-m-d');
                
                $clube_casa = Clube::where('nome', $jogos[$i][$j]['equipes']['mandante']['nome_popular'])->value('id');
                $clube_fora = Clube::where('nome', $jogos[$i][$j]['equipes']['visitante']['nome_popular'])->value('id');

                Jogo::create([
                    "rodada" => $i+1,
                    "status" => $jogos[$i][$j]['jogo_ja_comecou'],
                    "data_partida" => $dataConvertida,
                    "hora_partida" => $jogos[$i][$j]['hora_realizacao'],
                    "local" => $jogos[$i][$j]['sede']['nome_popular'],
                    "clube_casa" => $clube_casa,
                    "clube_fora" => $clube_fora,
                    "gols_clube_casa" => $jogos[$i][$j]['placar_oficial_mandante'],
                    "gols_clube_fora" => $jogos[$i][$j]['placar_oficial_visitante']
                ]);

            }
    
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jogo $jogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jogo $jogo)
    {
        //
    }
}
