<?php

$endpoint = "https://api.globoesporte.globo.com/tabela/d1a37fa4-e948-43a6-ba53-ab24ab3a45b1/fase/fase-unica-campeonato-brasileiro-2024/rodada/1/jogos/";

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

if (curl_errno($cURL))
    echo curl_error($cURL);
else
    print($response);

//fechar
curl_close($cURL);