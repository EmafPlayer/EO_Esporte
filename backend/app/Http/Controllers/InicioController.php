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

        // É para o caso das tabelas ainda não terem dados (Primeira chamada da api no front)
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


            // É o caso dos dados já terem sidos inseridos e só serão atualizados
            $JogoController = new JogoController();
            $JogoController->update($jogos);

        }
    }

    public function vincularID(&$jogos) {
        
        // Inserção dos id's dos clubes, pois serão usados esses id's para fazer a requisição do elenco
        $jogos[0][0]->equipes->mandante->id = 1981; // São Paulo
        $jogos[0][0]->equipes->visitante->id = 1959; // Sport
        
        $jogos[0][1]->equipes->mandante->id = 1954; // Cruzeiro
        $jogos[0][1]->equipes->visitante->id = 21982; // Mirassol
        
        $jogos[0][2]->equipes->mandante->id = 5926; // Grêmio
        $jogos[0][2]->equipes->visitante->id = 1977; // Atlético MG
        
        $jogos[0][3]->equipes->mandante->id = 2020; // Fortaleza
        $jogos[0][3]->equipes->visitante->id = 1961; // Fluminense
        
        $jogos[0][4]->equipes->mandante->id = 1980; // Juventude
        $jogos[0][4]->equipes->visitante->id = 1962; // Vitória
        
        $jogos[0][5]->equipes->mandante->id = 5981; // Flamengo
        $jogos[0][5]->equipes->visitante->id = 1966; // Internacional
        
        $jogos[0][6]->equipes->mandante->id = 1963; // Palmeiras
        $jogos[0][6]->equipes->visitante->id = 1958; // Botafogo
        
        $jogos[0][7]->equipes->mandante->id = 1974; // Vasco
        $jogos[0][7]->equipes->visitante->id = 1968; // Santos

        $jogos[0][8]->equipes->mandante->id = 1955; // Bahia
        $jogos[0][8]->equipes->visitante->id = 1957; // Corinthians

        $jogos[0][9]->equipes->mandante->id = 1999; // Bragantino
        $jogos[0][9]->equipes->visitante->id = 2001; // Ceará

    }

}
