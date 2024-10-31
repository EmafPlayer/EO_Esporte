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
                "id" => $jogos[$i]->equipes->mandante->id,
                "nome" => $jogos[$i]->equipes->mandante->nome_popular,
                "sigla" => $jogos[$i]->equipes->mandante->sigla,
                "escudo" => $jogos[$i]->equipes->mandante->escudo
            ]);
            Clube::create([
                "id" => $jogos[$i]->equipes->visitante->id,
                "nome" => $jogos[$i]->equipes->visitante->nome_popular,
                "sigla" => $jogos[$i]->equipes->visitante->sigla,
                "escudo" => $jogos[$i]->equipes->visitante->escudo
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $clubes = Clube::select('id','nome','sigla','escudo')->orderBy('id','asc')->get()->toArray();
        
        if(count($clubes) == 0)
            return response()->json(['message' => 'Ainda não possui clubes criados na base de dados'], 404);

        return response()->json(['message' => 'Clubes buscados com sucesso', 'clubes' => $clubes], 200);
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
