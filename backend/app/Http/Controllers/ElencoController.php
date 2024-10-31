<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use App\Models\Treinador;
use Database\Seeders\TreinadorSeeder;
use Illuminate\Http\Request;

class ElencoController extends Controller
{
    public function create($jogadores){

        if(Jogador::count() == 0 && Treinador::count() == 0){
            
            $TreinadorSeeder = new TreinadorSeeder();
            $TreinadorSeeder->run();
    
            $JogadoresController = new JogadoresController();
            $JogadoresController->create($jogadores);
        }

    }

}
