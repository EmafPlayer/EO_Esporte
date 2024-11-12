<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function start(){
        
        // Faz a requisição da api que retornará os dados dos jogos de cada rodada
        for($i = 1; $i <= 38; $i++){
            
            $endpoint = "https://api.globoesporte.globo.com/tabela/d1a37fa4-e948-43a6-ba53-ab24ab3a45b1/fase/fase-unica-campeonato-brasileiro-2024/rodada/$i/jogos/";
    
            //iniciar
            $cURL = curl_init();
    
            //Qual URL queremos bbucasr
            curl_setopt($cURL, CURLOPT_URL, $endpoint);
    
            //O resultado que teremos
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
    
            //definir um cabeçalho
            curl_setopt($cURL, CURLOPT_USERAGENT, 'cURL test');
    
            //Executa a requisição
            $response = curl_exec($cURL);
    
            $jogos[$i-1] = json_decode($response);
    
            //fechar
            curl_close($cURL);
    
        } 

        $InicioController = new InicioController();
        $InicioController->inicio($jogos);
    }

    public function startElenco(){
        
        $id_clubes = Clube::select('id')->get()->toArray();
        
        $i = 0;
        
        // Faz a requisição que retornará os dados do elenco de cada time
        foreach($id_clubes as $id_clube){
            
            $id = $id_clube['id'];
            
            $endpoint = "https://www.sofascore.com/api/v1/team/$id/players";
    
            //iniciar
            $cURL = curl_init();
    
            //Qual URL queremos bbucasr
            curl_setopt($cURL, CURLOPT_URL, $endpoint);
    
            //O resultado que teremos
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
    
            //definir um cabeçalho
            curl_setopt($cURL, CURLOPT_USERAGENT, 'cURL test');
    
            //Executa a requisição
            $response = curl_exec($cURL);
    
            $jogadores[$i] = json_decode($response);
    
            //fechar
            curl_close($cURL);

            $i++;
    
        } 

        app(ElencoController::class)->create($jogadores);
    }
}
