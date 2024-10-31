<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JogadoresController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create($jogadores)
    {
        for($i = 0; $i < count($jogadores); $i++){  //Clubes
            
            for($j = 0; $j < count($jogadores[$i]['players']); $j++){ //Integrantes

                DB::table('jogadores')->insert([
                    "nome" => $jogadores[$i]['players'][$j]['player']['name'],
                    "numero" => $jogadores[$i]['players'][$j]['player']['shirtNumber'],
                    "posicao" => ( $jogadores[$i]['players'][$j]['player']['position'] == 'F' ? 1 : 
                                 ( $jogadores[$i]['players'][$j]['player']['position'] == 'M' ? 2 :
                                 ( $jogadores[$i]['players'][$j]['player']['position'] == 'D' ? 3 : 4 ))),
                    "clube" => $jogadores[$i]['players'][$j]['player']['team']['id'],
                    "nacionalidade" => $jogadores[$i]['players'][$j]['player']['country']['alpha3']
                ]);

            }
    
        }

        
        for($i = 0; $i < count($jogadores); $i++){  //Clubes
            
            for($j = 0; $j < count($jogadores[$i]['foreignPlayers']); $j++){ //Integrantes

                if(!DB::table('jogadores')->where('nome', $jogadores[$i]['foreignPlayers'][$j]['player']['name'])->exists()){
                    DB::table('jogadores')->insert([
                        "nome" => $jogadores[$i]['foreignPlayers'][$j]['player']['name'],
                        "numero" => $jogadores[$i]['foreignPlayers'][$j]['player']['shirtNumber'],
                        "posicao" => ( $jogadores[$i]['foreignPlayers'][$j]['player']['position'] == 'F' ? 1 : 
                                     ( $jogadores[$i]['foreignPlayers'][$j]['player']['position'] == 'M' ? 2 :
                                     ( $jogadores[$i]['foreignPlayers'][$j]['player']['position'] == 'D' ? 3 : 4 ))),
                        "clube" => $jogadores[$i]['foreignPlayers'][$j]['player']['team']['id'],
                        "nacionalidade" => $jogadores[$i]['foreignPlayers'][$j]['player']['country']['alpha3']
                    ]);
                }


            }
    
        }

        for($i = 0; $i < count($jogadores); $i++){  //Clubes
            
            for($j = 0; $j < count($jogadores[$i]['nationalPlayers']); $j++){ //Integrantes

                if(!DB::table('jogadores')->where('nome', $jogadores[$i]['nationalPlayers'][$j]['player']['name'])->exists()){
                    DB::table('jogadores')->insert([
                        "nome" => $jogadores[$i]['nationalPlayers'][$j]['player']['name'],
                        "numero" => $jogadores[$i]['nationalPlayers'][$j]['player']['shirtNumber'],
                        "posicao" => ( $jogadores[$i]['nationalPlayers'][$j]['player']['position'] == 'F' ? 1 : 
                                     ( $jogadores[$i]['nationalPlayers'][$j]['player']['position'] == 'M' ? 2 :
                                     ( $jogadores[$i]['nationalPlayers'][$j]['player']['position'] == 'D' ? 3 : 4 ))),
                        "clube" => $jogadores[$i]['nationalPlayers'][$j]['player']['team']['id'],
                        "nacionalidade" => $jogadores[$i]['nationalPlayers'][$j]['player']['country']['alpha3']
                    ]);
                }


            }
    
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id_clube)
    {  

        for($i = 1; $i <= 4; $i++){
            $jogadores[$i] = DB::table('jogadores_view')->where('id_posicao', $i)->orderBy('nome_jogador', 'asc')->get()->toArray();
        }

        if (count($jogadores) == 0)
            return response()->json(['message' => 'Ainda não possui jogadores para esse time na base de dados'], 404);

        return response()->json(['message' => 'Jogadores buscados com sucesso', 'jogadores' => $jogadores], 200);
    }
}
