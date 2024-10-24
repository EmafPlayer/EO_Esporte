<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class ClubeController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create($jogos)
    {
        for($i = 0; $i < count($jogos); $i++){
            Clube::create([
                "nome" => $jogos[$i]['equipes']['mandante']['nome_popular'],
                "sigla" => $jogos[$i]['equipes']['mandante']['sigla'],
                "escudo" => $jogos[$i]['equipes']['mandante']['escudo']
            ]);
            Clube::create([
                "nome" => $jogos[$i]['equipes']['visitante']['nome_popular'],
                "sigla" => $jogos[$i]['equipes']['visitante']['sigla'],
                "escudo" => $jogos[$i]['equipes']['visitante']['escudo']
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Clube $clube)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clube $clube)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clube $clube)
    {
        //
    }
}
