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
                    "posicao" => ( $jogadores[$i]['players'][$j]['player']['position'] == 'A' ? 0 : 
                                 ( $jogadores[$i]['players'][$j]['player']['position'] == 'M' ? 1 :
                                 ( $jogadores[$i]['players'][$j]['player']['position'] == 'D' ? 2 : 3 ))),
                    "clube" => $jogadores[$i]['players'][$j]['player']['team']['id'],
                    "nacionalidade" => $jogadores[$i]['players'][$j]['player']['country']['name']
                ]);

            }
    
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id_clube)
    {  
        $jogadores = DB::table('jogadores_view')->where('id_clube', $id_clube)->get()->toArray();

        if (count($jogadores) == 0) {
            return response()->json(['message' => 'Ainda não possui jogadores para esse time na base de dados'], 404);
        }

        return response()->json(['message' => 'Jogadores buscados com sucesso', 'jogos' => $jogadores], 200);
    }
}
