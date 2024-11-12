<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Support\Facades\DB;
use App\Models\Clube;
use Carbon\Carbon;

class JogoController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create($jogos)
    {

        // Armazenará os dados dos jogos, adquiridos pela api, no banco de dados 
        for($i = 0; $i < count($jogos); $i++){

            for($j = 0; $j < count($jogos[0]); $j++){

                $dataConvertida = Carbon::parse($jogos[$i][$j]->data_realizacao)->format('Y-m-d');
                
                $clube_casa = Clube::where('nome', $jogos[$i][$j]->equipes->mandante->nome_popular)->value('id');
                $clube_fora = Clube::where('nome', $jogos[$i][$j]->equipes->visitante->nome_popular)->value('id');

                Jogo::create([
                    "rodada" => $i+1,
                    "status" => ($jogos[$i][$j]->jogo_ja_comecou == null ? false : $jogos[$i][$j]->jogo_ja_comecou),
                    "data_partida" => $dataConvertida,
                    "hora_partida" => $jogos[$i][$j]->hora_realizacao,
                    "local" => ($jogos[$i][$j]->sede == null ? "Ainda não definido" : $jogos[$i][$j]->sede->nome_popular),
                    "clube_casa" => $clube_casa,
                    "clube_fora" => $clube_fora,
                    "gols_clube_casa" => ($jogos[$i][$j]->placar_oficial_mandante == null ? 0 : $jogos[$i][$j]->placar_oficial_mandante),
                    "gols_clube_fora" => ($jogos[$i][$j]->placar_oficial_visitante == null ? 0 : $jogos[$i][$j]->placar_oficial_visitante)
                ]);

            }
    
        }

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {  
        $qtd_rodadas = count(DB::table('jogos_view')->groupBy('rodada')->get()->toArray());

        for($i = 0; $i < $qtd_rodadas; $i++)
            $jogos[$i] = DB::table('jogos_view')->where('rodada', $i+1)->get()->toArray();

        if ($qtd_rodadas == 0) {
            return response()->json(['message' => 'Ainda não possui nenhum jogo na base de dados'], 404);
        }

        // Retornará os dados dos jogos para a api
        return response()->json(['message' => 'Jogos buscados com sucesso', 'jogos' => $jogos], 200);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update($jogos)
    {
        // Atualizará os dados dos jogos que aconteceram dps da primeira interação com o programa
        for($i = 0; $i < count($jogos); $i++){  //Rodada

            for($j = 0; $j < count($jogos[0]); $j++){ //Jogos da Rodada

                $clube_casa = Clube::where('nome', $jogos[$i][$j]->equipes->mandante->nome_popular)->value('id');
                $clube_fora = Clube::where('nome', $jogos[$i][$j]->equipes->visitante->nome_popular)->value('id');

                $status_jogo = Jogo::where('rodada', $i+1)->where('clube_casa', $clube_casa)->where('clube_fora', $clube_fora)->value('status');

                if( ($jogos[$i][$j]->jogo_ja_comecou == true) && ($status_jogo == 0) ){ // É o caso do jogo ter acontecido, mas ainda não foi armazenado no banco de dados
                    Jogo::where('rodada', $i+1)->where('clube_casa', $clube_casa)->where('clube_fora', $clube_fora)->
                    update([
                        "status" => true,
                        "hora_partida" => $jogos[$i][$j]->hora_realizacao,
                        "local" => $jogos[$i][$j]->sede->nome_popular,
                        "gols_clube_casa" => $jogos[$i][$j]->placar_oficial_mandante,
                        "gols_clube_fora" => $jogos[$i][$j]->placar_oficial_visitante
                    ]);
                }

            }
    
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jogo $jogo)
    {
        //
    }
}
