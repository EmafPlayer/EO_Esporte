<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use App\Models\Jogo;
use App\Models\Tabela;
use Database\Seeders\PosicoesSeeder;
use Database\Seeders\RodadasSeeder;
use Database\Seeders\TreinadorSeeder;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio($jogos) {

        if((Clube::count() == 0) && (Jogo::count() == 0) && (Tabela::count() == 0)){

            $InicioController = new InicioController();
            $InicioController->vincularID($jogos);

            $RodadasSeeder = new RodadasSeeder();
            $RodadasSeeder->run();

            $PosicoesSeeder = new PosicoesSeeder();
            $PosicoesSeeder->run();
            
            $ClubeController = new ClubeController();
            $ClubeController->create($jogos[0]);
            
            $clubes_id = Clube::select(['id'])->get()->toArray();
            $TabelaController = new TabelaController();
            $TabelaController->create($clubes_id);

            $JogoController = new JogoController();
            $JogoController->create($jogos);

        } else {

            $JogoController = new JogoController();
            $JogoController->update($jogos);

        }
    }

    public function vincularID(&$jogos) {
        
        $jogos[0][0]['equipes']['mandante']['id'] = 1966;
        $jogos[0][0]['equipes']['visitante']['id'] = 1955;
        $jogos[0][1]['equipes']['mandante']['id'] = 1984;
        $jogos[0][1]['equipes']['visitante']['id'] = 1980;
        $jogos[0][2]['equipes']['mandante']['id'] = 1961;
        $jogos[0][2]['equipes']['visitante']['id'] = 1999;
        $jogos[0][3]['equipes']['mandante']['id'] = 1981;
        $jogos[0][3]['equipes']['visitante']['id'] = 2020;
        $jogos[0][4]['equipes']['mandante']['id'] = 1974;
        $jogos[0][4]['equipes']['visitante']['id'] = 5926;
        $jogos[0][5]['equipes']['mandante']['id'] = 1957;
        $jogos[0][5]['equipes']['visitante']['id'] = 1977;
        $jogos[0][6]['equipes']['mandante']['id'] = 1967;
        $jogos[0][6]['equipes']['visitante']['id'] = 49202;
        $jogos[0][7]['equipes']['mandante']['id'] = 7314;
        $jogos[0][7]['equipes']['visitante']['id'] = 5981;
        $jogos[0][8]['equipes']['mandante']['id'] = 1954;
        $jogos[0][8]['equipes']['visitante']['id'] = 1958;
        $jogos[0][9]['equipes']['mandante']['id'] = 1962;
        $jogos[0][9]['equipes']['visitante']['id'] = 1963;

    }

}
