<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TreinadoresController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show($id_clube)
    {  
        $treinador = DB::table('treinadores_view')->where('id_clube', $id_clube)->get()->toArray();

        if (count($treinador) == 0) {
            return response()->json(['message' => 'Ainda não possui treinador para esse time na base de dados'], 404);
        }

        return response()->json(['message' => 'Treinador buscados com sucesso', 'treinador' => $treinador], 200);
    }
}
