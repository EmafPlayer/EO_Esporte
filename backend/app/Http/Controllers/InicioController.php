<?php

namespace App\Http\Controllers;

use App\Models\Clube;
use App\Models\Jogo;
use App\Models\Tabela;
use Database\Seeders\RodadasSeeder;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
       
        $jogos = [
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
        ],
        [
            [
                "id" => 317215,
                "data_realizacao" => "2024-04-16T21:30",
                "hora_realizacao" => "21:30",
                "placar_oficial_visitante" => 1,
                "placar_oficial_mandante" => 2,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 265,
                        "nome_popular" => "Bahia",
                        "sigla" => "BAH",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/bahia.svg"
                    ],
                    "visitante" => [
                        "id" => 266,
                        "nome_popular" => "Fluminense",
                        "sigla" => "FLU",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/fluminense.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Casa de Apostas Arena Fonte Nova"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/ba/futebol/brasileirao-serie-a/jogo/16-04-2024/bahia-fluminense.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317213,
                "data_realizacao" => "2024-04-17T19:00",
                "hora_realizacao" => "19:00",
                "placar_oficial_visitante" => 0,
                "placar_oficial_mandante" => 2,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 284,
                        "nome_popular" => "Grêmio",
                        "sigla" => "GRE",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/12/gremio.svg"
                    ],
                    "visitante" => [
                        "id" => 293,
                        "nome_popular" => "Athletico-PR",
                        "sigla" => "CAP",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/09/09/Athletico-PR.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Arena do Grêmio"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/rs/futebol/brasileirao-serie-a/jogo/17-04-2024/gremio-atletico-pr.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317219,
                "data_realizacao" => "2024-04-17T19:00",
                "hora_realizacao" => "19:00",
                "placar_oficial_visitante" => 1,
                "placar_oficial_mandante" => 2,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 280,
                        "nome_popular" => "Bragantino",
                        "sigla" => "RBB",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/06/28/bragantino.svg"
                    ],
                    "visitante" => [
                        "id" => 267,
                        "nome_popular" => "Vasco",
                        "sigla" => "VAS",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/09/04/vasco_SVG.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Nabi Abi Chedid"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/sp/vale-do-paraiba-regiao/futebol/brasileirao-serie-a/jogo/17-04-2024/bragantino-vasco.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317214,
                "data_realizacao" => "2024-04-17T20:00",
                "hora_realizacao" => "20:00",
                "placar_oficial_visitante" => 1,
                "placar_oficial_mandante" => 1,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 282,
                        "nome_popular" => "Atlético-MG",
                        "sigla" => "CAM",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/10/atletico-mg.svg"
                    ],
                    "visitante" => [
                        "id" => 288,
                        "nome_popular" => "Criciúma",
                        "sigla" => "CRI",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/03/28/Criciuma-2024.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Arena MRV"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/mg/futebol/brasileirao-serie-a/jogo/17-04-2024/atletico-mg-criciuma.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317218,
                "data_realizacao" => "2024-04-17T20:00",
                "hora_realizacao" => "20:00",
                "placar_oficial_visitante" => 1,
                "placar_oficial_mandante" => 0,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 275,
                        "nome_popular" => "Palmeiras",
                        "sigla" => "PAL",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/07/06/Palmeiras.svg"
                    ],
                    "visitante" => [
                        "id" => 285,
                        "nome_popular" => "Internacional",
                        "sigla" => "INT",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/internacional.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Arena Barueri"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/sp/futebol/brasileirao-serie-a/jogo/17-04-2024/palmeiras-internacional.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317220,
                "data_realizacao" => "2024-04-17T20:00",
                "hora_realizacao" => "20:00",
                "placar_oficial_visitante" => 1,
                "placar_oficial_mandante" => 1,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 356,
                        "nome_popular" => "Fortaleza",
                        "sigla" => "FOR",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/09/19/Fortaleza_2021_1.svg"
                    ],
                    "visitante" => [
                        "id" => 283,
                        "nome_popular" => "Cruzeiro",
                        "sigla" => "CRU",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/02/13/cruzeiro_2021.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Castelão (CE)"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/ce/futebol/brasileirao-serie-a/jogo/17-04-2024/fortaleza-cruzeiro.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317222,
                "data_realizacao" => "2024-04-17T20:00",
                "hora_realizacao" => "20:00",
                "placar_oficial_visitante" => 0,
                "placar_oficial_mandante" => 2,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 286,
                        "nome_popular" => "Juventude",
                        "sigla" => "JUV",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/04/29/Juventude-2021-01.svg"
                    ],
                    "visitante" => [
                        "id" => 264,
                        "nome_popular" => "Corinthians",
                        "sigla" => "COR",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/10/09/Corinthians_2024_Q4ahot4.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Alfredo Jaconi"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/rs/futebol/brasileirao-serie-a/jogo/17-04-2024/juventude-corinthians.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317216,
                "data_realizacao" => "2024-04-17T21:30",
                "hora_realizacao" => "21:30",
                "placar_oficial_visitante" => 1,
                "placar_oficial_mandante" => 2,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 262,
                        "nome_popular" => "Flamengo",
                        "sigla" => "FLA",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/04/10/Flamengo-2018.svg"
                    ],
                    "visitante" => [
                        "id" => 276,
                        "nome_popular" => "São Paulo",
                        "sigla" => "SAO",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/sao-paulo.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Maracanã"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/rj/futebol/brasileirao-serie-a/jogo/17-04-2024/flamengo-sao-paulo.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317217,
                "data_realizacao" => "2024-04-18T21:30",
                "hora_realizacao" => "21:30",
                "placar_oficial_visitante" => 0,
                "placar_oficial_mandante" => 1,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 263,
                        "nome_popular" => "Botafogo",
                        "sigla" => "BOT",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/02/04/botafogo-svg.svg"
                    ],
                    "visitante" => [
                        "id" => 373,
                        "nome_popular" => "Atlético-GO",
                        "sigla" => "ACG",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2020/07/02/atletico-go-2020.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Nilton Santos (Engenhão)"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/rj/futebol/brasileirao-serie-a/jogo/18-04-2024/botafogo-atletico-go.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ],
            [
                "id" => 317221,
                "data_realizacao" => "2024-06-05T20:00",
                "hora_realizacao" => "20:00",
                "placar_oficial_visitante" => 0,
                "placar_oficial_mandante" => 0,
                "placar_penaltis_visitante" => null,
                "placar_penaltis_mandante" => null,
                "equipes" => [
                    "mandante" => [
                        "id" => 1371,
                        "nome_popular" => "Cuiabá",
                        "sigla" => "CUI",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/12/26/Cuiaba_EC.svg"
                    ],
                    "visitante" => [
                        "id" => 287,
                        "nome_popular" => "Vitória",
                        "sigla" => "VIT",
                        "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/04/09/escudo-vitoria-svg-69281.svg"
                    ]
                    ],
                "sede" => [
                    "nome_popular" => "Arena Pantanal"
                ],
                "transmissao" => [
                    "label" => "saiba como foi",
                    "url" => "https =>//ge.globo.com/mt/futebol/brasileirao-serie-a/jogo/05-06-2024/cuiaba-vitoria.ghtml",
                    "broadcast" => [
                        "id" => "ENCERRADA",
                        "label" => "saiba como foi"
                    ]
                    ],
                "jogo_ja_comecou" => true
                    ]
            ],
            [
                [
                    "id" => 317253,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 284,
                            "nome_popular" => "Grêmio",
                            "sigla" => "GRE",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/12/gremio.svg"
                        ],
                        "visitante" => [
                            "id" => 264,
                            "nome_popular" => "Corinthians",
                            "sigla" => "COR",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/10/09/Corinthians_2024_Q4ahot4.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317254,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 282,
                            "nome_popular" => "Atlético-MG",
                            "sigla" => "CAM",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/10/atletico-mg.svg"
                        ],
                        "visitante" => [
                            "id" => 293,
                            "nome_popular" => "Athletico-PR",
                            "sigla" => "CAP",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/09/09/Athletico-PR.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317255,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 265,
                            "nome_popular" => "Bahia",
                            "sigla" => "BAH",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/bahia.svg"
                        ],
                        "visitante" => [
                            "id" => 373,
                            "nome_popular" => "Atlético-GO",
                            "sigla" => "ACG",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2020/07/02/atletico-go-2020.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317256,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 262,
                            "nome_popular" => "Flamengo",
                            "sigla" => "FLA",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/04/10/Flamengo-2018.svg"
                        ],
                        "visitante" => [
                            "id" => 287,
                            "nome_popular" => "Vitória",
                            "sigla" => "VIT",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/04/09/escudo-vitoria-svg-69281.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317257,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 263,
                            "nome_popular" => "Botafogo",
                            "sigla" => "BOT",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/02/04/botafogo-svg.svg"
                        ],
                        "visitante" => [
                            "id" => 276,
                            "nome_popular" => "São Paulo",
                            "sigla" => "SAO",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/sao-paulo.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317258,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 275,
                            "nome_popular" => "Palmeiras",
                            "sigla" => "PAL",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2019/07/06/Palmeiras.svg"
                        ],
                        "visitante" => [
                            "id" => 266,
                            "nome_popular" => "Fluminense",
                            "sigla" => "FLU",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/fluminense.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317259,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 280,
                            "nome_popular" => "Bragantino",
                            "sigla" => "RBB",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/06/28/bragantino.svg"
                        ],
                        "visitante" => [
                            "id" => 288,
                            "nome_popular" => "Criciúma",
                            "sigla" => "CRI",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2024/03/28/Criciuma-2024.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317260,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 356,
                            "nome_popular" => "Fortaleza",
                            "sigla" => "FOR",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/09/19/Fortaleza_2021_1.svg"
                        ],
                        "visitante" => [
                            "id" => 285,
                            "nome_popular" => "Internacional",
                            "sigla" => "INT",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/03/11/internacional.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317261,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 1371,
                            "nome_popular" => "Cuiabá",
                            "sigla" => "CUI",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2018/12/26/Cuiaba_EC.svg"
                        ],
                        "visitante" => [
                            "id" => 267,
                            "nome_popular" => "Vasco",
                            "sigla" => "VAS",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/09/04/vasco_SVG.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ],
                [
                    "id" => 317262,
                    "data_realizacao" => "2024-12-08T12:00",
                    "hora_realizacao" => null,
                    "placar_oficial_visitante" => null,
                    "placar_oficial_mandante" => null,
                    "placar_penaltis_visitante" => null,
                    "placar_penaltis_mandante" => null,
                    "equipes" => [
                        "mandante" => [
                            "id" => 286,
                            "nome_popular" => "Juventude",
                            "sigla" => "JUV",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/04/29/Juventude-2021-01.svg"
                        ],
                        "visitante" => [
                            "id" => 283,
                            "nome_popular" => "Cruzeiro",
                            "sigla" => "CRU",
                            "escudo" => "https =>//s.sde.globo.com/media/organizations/2021/02/13/cruzeiro_2021.svg"
                        ]
                    ],
                    "sede" => null,
                    "transmissao" => null,
                    "jogo_ja_comecou" => null
                ]
            ]
        ];

        if((Clube::count() == 0) && (Jogo::count() == 0) && (Tabela::count() == 0)){

            $ClubeController = new RodadasSeeder();
            $ClubeController->run();

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

}
