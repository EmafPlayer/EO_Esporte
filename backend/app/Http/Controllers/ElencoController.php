<?php

namespace App\Http\Controllers;

use Database\Seeders\TreinadorSeeder;
use Illuminate\Http\Request;

class ElencoController extends Controller
{
    public function create($jogadores){

        $TreinadorSeeder = new TreinadorSeeder();
        $TreinadorSeeder->run();

        $JogadoresController = new JogadoresController();
        $JogadoresController->create($jogadores);

    }

}
