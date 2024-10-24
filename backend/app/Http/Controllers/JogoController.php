<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Http\Controllers\ClubeController;
use App\Models\Clube;
use Carbon\Carbon;

class JogoController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jogos = 
        [
            [
                [
                    "id" => 317203,
                    "data_realizacao" => "2024-04-13T18:30",
                    "hora_realizacao" => "18:30",
                    "placar_oficial_visitante" => 1,
                    "placar_oficial_mandante" => 2,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 285,
                            "nome_popular" => "Internacional",
                            "sigla" => "INT",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/internacional.svg"
                        ],
                        "visitante" => [
                            "id" => 265,
                            "nome_popular" => "Bahia",
                            "sigla" => "BAH",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/bahia.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Beira-Rio"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/rs/futebol/brasileirao-serie-a/jogo/13-04-2024/internacional-bahia.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317212,
                    "data_realizacao" => "2024-04-13T18:30",
                    "hora_realizacao" => "18:30",
                    "placar_oficial_visitante" => 1,
                    "placar_oficial_mandante" => 1,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 288,
                            "nome_popular" => "Criciúma",
                            "sigla" => "CRI",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/03/28/Criciuma-2024.svg"
                        ],
                        "visitante" => [
                            "id" => 286,
                            "nome_popular" => "Juventude",
                            "sigla" => "JUV",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/04/29/Juventude-2021-01.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Heriberto Hülse"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/sc/futebol/brasileirao-serie-a/jogo/13-04-2024/criciuma-juventude.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317206,
                    "data_realizacao" => "2024-04-13T21:00",
                    "hora_realizacao" => "21:00",
                    "placar_oficial_visitante" => 2,
                    "placar_oficial_mandante" => 2,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 266,
                            "nome_popular" => "Fluminense",
                            "sigla" => "FLU",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/fluminense.svg"
                        ],
                        "visitante" => [
                            "id" => 280,
                            "nome_popular" => "Bragantino",
                            "sigla" => "RBB",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/06/28/bragantino.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Maracanã"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/rj/futebol/brasileirao-serie-a/jogo/13-04-2024/fluminense-bragantino.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317209,
                    "data_realizacao" => "2024-04-13T21:00",
                    "hora_realizacao" => "21:00",
                    "placar_oficial_visitante" => 2,
                    "placar_oficial_mandante" => 1,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 276,
                            "nome_popular" => "São Paulo",
                            "sigla" => "SAO",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/sao-paulo.svg"
                        ],
                        "visitante" => [
                            "id" => 356,
                            "nome_popular" => "Fortaleza",
                            "sigla" => "FOR",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/09/19/Fortaleza_2021_1.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Morumbis"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/sp/futebol/brasileirao-serie-a/jogo/13-04-2024/sao-paulo-fortaleza.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317207,
                    "data_realizacao" => "2024-04-14T16:00",
                    "hora_realizacao" => "16:00",
                    "placar_oficial_visitante" => 1,
                    "placar_oficial_mandante" => 2,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 267,
                            "nome_popular" => "Vasco",
                            "sigla" => "VAS",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/09/04/vasco_SVG.svg"
                        ],
                        "visitante" => [
                            "id" => 284,
                            "nome_popular" => "Grêmio",
                            "sigla" => "GRE",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/12/gremio.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "São Januário"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/rj/futebol/brasileirao-serie-a/jogo/14-04-2024/vasco-gremio.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317208,
                    "data_realizacao" => "2024-04-14T16:00",
                    "hora_realizacao" => "16:00",
                    "placar_oficial_visitante" => 0,
                    "placar_oficial_mandante" => 0,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 264,
                            "nome_popular" => "Corinthians",
                            "sigla" => "COR",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/10/09/Corinthians_2024_Q4ahot4.svg"
                        ],
                        "visitante" => [
                            "id" => 282,
                            "nome_popular" => "Atlético-MG",
                            "sigla" => "CAM",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/10/atletico-mg.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Neo Química Arena"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/sp/futebol/brasileirao-serie-a/jogo/14-04-2024/corinthians-atletico-mg.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317210,
                    "data_realizacao" => "2024-04-14T16:00",
                    "hora_realizacao" => "16:00",
                    "placar_oficial_visitante" => 0,
                    "placar_oficial_mandante" => 4,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 293,
                            "nome_popular" => "Athletico-PR",
                            "sigla" => "CAP",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/09/09/Athletico-PR.svg"
                        ],
                        "visitante" => [
                            "id" => 1371,
                            "nome_popular" => "Cuiabá",
                            "sigla" => "CUI",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/12/26/Cuiaba_EC.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Ligga Arena"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/pr/futebol/brasileirao-serie-a/jogo/14-04-2024/atletico-pr-cuiaba.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317211,
                    "data_realizacao" => "2024-04-14T16:00",
                    "hora_realizacao" => "16:00",
                    "placar_oficial_visitante" => 2,
                    "placar_oficial_mandante" => 1,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 373,
                            "nome_popular" => "Atlético-GO",
                            "sigla" => "ACG",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2020/07/02/atletico-go-2020.svg"
                        ],
                        "visitante" => [
                            "id" => 262,
                            "nome_popular" => "Flamengo",
                            "sigla" => "FLA",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/04/10/Flamengo-2018.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Serra Dourada"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/go/futebol/brasileirao-serie-a/jogo/14-04-2024/atletico-go-flamengo.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317204,
                    "data_realizacao" => "2024-04-14T17:00",
                    "hora_realizacao" => "17:00",
                    "placar_oficial_visitante" => 2,
                    "placar_oficial_mandante" => 3,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 283,
                            "nome_popular" => "Cruzeiro",
                            "sigla" => "CRU",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/02/13/cruzeiro_2021.svg"
                        ],
                        "visitante" => [
                            "id" => 263,
                            "nome_popular" => "Botafogo",
                            "sigla" => "BOT",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/02/04/botafogo-svg.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Mineirão"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/mg/futebol/brasileirao-serie-a/jogo/14-04-2024/cruzeiro-botafogo.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ],
                [
                    "id" => 317205,
                    "data_realizacao" => "2024-04-14T18:30",
                    "hora_realizacao" => "18:30",
                    "placar_oficial_visitante" => 1,
                    "placar_oficial_mandante" => 0,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 287,
                            "nome_popular" => "Vitória",
                            "sigla" => "VIT",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/04/09/escudo-vitoria-svg-69281.svg"
                        ],
                        "visitante" => [
                            "id" => 275,
                            "nome_popular" => "Palmeiras",
                            "sigla" => "PAL",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/07/06/Palmeiras.svg"
                        ]
                    ],
                    "sede" => [
                        "nome_popular" => "Barradão"
                    ],
                    "transmissao" => [
                        "label" => "saiba como foi",
                        "url" => "https =>//ge.globo.com/ba/futebol/brasileirao-serie-a/jogo/14-04-2024/vitoria-palmeiras.ghtml",
                        "broadcast" => [
                            "id" => "ENCERRADA",
                            "label" => "saiba como foi"
                        ]
                    ],
                    "jogo_ja_comecou" => true
                ]
            ]
        ];

        
        $ClubeController = new ClubeController();
        
        $ClubeController->create($jogos[0]);

        for($i = 0; $i < count($jogos); $i++){

            for($j = 0; $j < count($jogos[0]); $j++){

                $dataConvertida = Carbon::parse($jogos[$i][$j]['data_realizacao'])->format('Y-m-d');
                
                $clube_casa = Clube::where('nome', $jogos[$i][$j]['equipes']['mandante']['nome_popular'])->value('id');
                $clube_fora = Clube::where('nome', $jogos[$i][$j]['equipes']['visitante']['nome_popular'])->value('id');

                Jogo::create([
                    "rodada" => $i+1,
                    "data_partida" => $dataConvertida,
                    "hora_partida" => $jogos[$i][$j]['hora_realizacao'],
                    "local" => $jogos[$i][$j]['sede']['nome_popular'],
                    "clube_casa" => $clube_casa,
                    "clube_fora" => $clube_fora,
                    "gols_clube_casa" => $jogos[$i][$j]['placar_oficial_mandante'],
                    "gols_clube_fora" => $jogos[$i][$j]['placar_oficial_visitante']
                ]);

            }
    
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jogo $jogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jogo $jogo)
    {
        //
    }
}
