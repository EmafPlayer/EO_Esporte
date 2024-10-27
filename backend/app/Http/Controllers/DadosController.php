<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function start(){

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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/internacional.svg"
                        ],
                        "visitante" => [
                            "id" => 265,
                            "nome_popular" => "Bahia",
                            "sigla" => "BAH",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/bahia.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2024/03/28/Criciuma-2024.svg"
                        ],
                        "visitante" => [
                            "id" => 286,
                            "nome_popular" => "Juventude",
                            "sigla" => "JUV",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/04/29/Juventude-2021-01.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/fluminense.svg"
                        ],
                        "visitante" => [
                            "id" => 280,
                            "nome_popular" => "Bragantino",
                            "sigla" => "RBB",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/06/28/bragantino.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/sao-paulo.svg"
                        ],
                        "visitante" => [
                            "id" => 356,
                            "nome_popular" => "Fortaleza",
                            "sigla" => "FOR",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/09/19/Fortaleza_2021_1.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/09/04/vasco_SVG.svg"
                        ],
                        "visitante" => [
                            "id" => 284,
                            "nome_popular" => "Grêmio",
                            "sigla" => "GRE",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/12/gremio.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2024/10/09/Corinthians_2024_Q4ahot4.svg"
                        ],
                        "visitante" => [
                            "id" => 282,
                            "nome_popular" => "Atlético-MG",
                            "sigla" => "CAM",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/10/atletico-mg.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2019/09/09/Athletico-PR.svg"
                        ],
                        "visitante" => [
                            "id" => 1371,
                            "nome_popular" => "Cuiabá",
                            "sigla" => "CUI",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/12/26/Cuiaba_EC.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2020/07/02/atletico-go-2020.svg"
                        ],
                        "visitante" => [
                            "id" => 262,
                            "nome_popular" => "Flamengo",
                            "sigla" => "FLA",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/04/10/Flamengo-2018.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/02/13/cruzeiro_2021.svg"
                        ],
                        "visitante" => [
                            "id" => 263,
                            "nome_popular" => "Botafogo",
                            "sigla" => "BOT",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2019/02/04/botafogo-svg.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2024/04/09/escudo-vitoria-svg-69281.svg"
                        ],
                        "visitante" => [
                            "id" => 275,
                            "nome_popular" => "Palmeiras",
                            "sigla" => "PAL",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2019/07/06/Palmeiras.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/bahia.svg"
                        ],
                        "visitante" => [
                            "id" => 266,
                            "nome_popular" => "Fluminense",
                            "sigla" => "FLU",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/fluminense.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/12/gremio.svg"
                        ],
                        "visitante" => [
                            "id" => 293,
                            "nome_popular" => "Athletico-PR",
                            "sigla" => "CAP",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2019/09/09/Athletico-PR.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/06/28/bragantino.svg"
                        ],
                        "visitante" => [
                            "id" => 267,
                            "nome_popular" => "Vasco",
                            "sigla" => "VAS",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/09/04/vasco_SVG.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/10/atletico-mg.svg"
                        ],
                        "visitante" => [
                            "id" => 288,
                            "nome_popular" => "Criciúma",
                            "sigla" => "CRI",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2024/03/28/Criciuma-2024.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2019/07/06/Palmeiras.svg"
                        ],
                        "visitante" => [
                            "id" => 285,
                            "nome_popular" => "Internacional",
                            "sigla" => "INT",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/internacional.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/09/19/Fortaleza_2021_1.svg"
                        ],
                        "visitante" => [
                            "id" => 283,
                            "nome_popular" => "Cruzeiro",
                            "sigla" => "CRU",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/02/13/cruzeiro_2021.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2021/04/29/Juventude-2021-01.svg"
                        ],
                        "visitante" => [
                            "id" => 264,
                            "nome_popular" => "Corinthians",
                            "sigla" => "COR",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2024/10/09/Corinthians_2024_Q4ahot4.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/04/10/Flamengo-2018.svg"
                        ],
                        "visitante" => [
                            "id" => 276,
                            "nome_popular" => "São Paulo",
                            "sigla" => "SAO",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/sao-paulo.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2019/02/04/botafogo-svg.svg"
                        ],
                        "visitante" => [
                            "id" => 373,
                            "nome_popular" => "Atlético-GO",
                            "sigla" => "ACG",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2020/07/02/atletico-go-2020.svg"
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
                            "escudo" => "https://s.sde.globo.com/media/organizations/2018/12/26/Cuiaba_EC.svg"
                        ],
                        "visitante" => [
                            "id" => 287,
                            "nome_popular" => "Vitória",
                            "sigla" => "VIT",
                            "escudo" => "https://s.sde.globo.com/media/organizations/2024/04/09/escudo-vitoria-svg-69281.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/12/gremio.svg"
                            ],
                            "visitante" => [
                                "id" => 264,
                                "nome_popular" => "Corinthians",
                                "sigla" => "COR",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2024/10/09/Corinthians_2024_Q4ahot4.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/10/atletico-mg.svg"
                            ],
                            "visitante" => [
                                "id" => 293,
                                "nome_popular" => "Athletico-PR",
                                "sigla" => "CAP",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2019/09/09/Athletico-PR.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/bahia.svg"
                            ],
                            "visitante" => [
                                "id" => 373,
                                "nome_popular" => "Atlético-GO",
                                "sigla" => "ACG",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2020/07/02/atletico-go-2020.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/04/10/Flamengo-2018.svg"
                            ],
                            "visitante" => [
                                "id" => 287,
                                "nome_popular" => "Vitória",
                                "sigla" => "VIT",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2024/04/09/escudo-vitoria-svg-69281.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2019/02/04/botafogo-svg.svg"
                            ],
                            "visitante" => [
                                "id" => 276,
                                "nome_popular" => "São Paulo",
                                "sigla" => "SAO",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/sao-paulo.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2019/07/06/Palmeiras.svg"
                            ],
                            "visitante" => [
                                "id" => 266,
                                "nome_popular" => "Fluminense",
                                "sigla" => "FLU",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/fluminense.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2021/06/28/bragantino.svg"
                            ],
                            "visitante" => [
                                "id" => 288,
                                "nome_popular" => "Criciúma",
                                "sigla" => "CRI",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2024/03/28/Criciuma-2024.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2021/09/19/Fortaleza_2021_1.svg"
                            ],
                            "visitante" => [
                                "id" => 285,
                                "nome_popular" => "Internacional",
                                "sigla" => "INT",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/03/11/internacional.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2018/12/26/Cuiaba_EC.svg"
                            ],
                            "visitante" => [
                                "id" => 267,
                                "nome_popular" => "Vasco",
                                "sigla" => "VAS",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2021/09/04/vasco_SVG.svg"
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
                                "escudo" => "https://s.sde.globo.com/media/organizations/2021/04/29/Juventude-2021-01.svg"
                            ],
                            "visitante" => [
                                "id" => 283,
                                "nome_popular" => "Cruzeiro",
                                "sigla" => "CRU",
                                "escudo" => "https://s.sde.globo.com/media/organizations/2021/02/13/cruzeiro_2021.svg"
                            ]
                        ],
                        "sede" => null,
                        "transmissao" => null,
                        "jogo_ja_comecou" => null
                    ]
                ]
            ];

        $jogadores = [
            [
                "players" => [
                    [
                        "player" => [
                            "name" => "Pedro",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "pedro",
                            "shortName" => "Pedro",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "F",
                            "jerseyNumber" => "9",
                            "height" => 186,
                            "preferredFoot" => "Right",
                            "userCount" => 37360,
                            "gender" => "M",
                            "id" => 840219,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 9,
                            "dateOfBirthTimestamp" => 866764800,
                            "contractUntilTimestamp" => 1830211200,
                            "proposedMarketValue" => 22000000,
                            "proposedMarketValueRaw" => [
                                "value" => 38187854,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "بيدرو"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "بيدرو"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Nicolás de la Cruz",
                            "slug" => "nicolas-de-la-cruz",
                            "shortName" => "N. de la Cruz",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "18",
                            "height" => 167,
                            "preferredFoot" => "Right",
                            "retired" => true,
                            "userCount" => 17027,
                            "deceased" => true,
                            "gender" => "M",
                            "id" => 877513,
                            "country" => [
                                "alpha2" => "UY",
                                "alpha3" => "URY",
                                "name" => "Uruguay",
                                "slug" => "uruguay"
                            ],
                            "shirtNumber" => 18,
                            "dateOfBirthTimestamp" => 865123200,
                            "contractUntilTimestamp" => 1845936000,
                            "proposedMarketValue" => 16700000,
                            "proposedMarketValueRaw" => [
                                "value" => 967598,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "نيكولاس دي لا كروز"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "ن. د. ل. كروز"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Everton",
                            "firstName" => "Everton",
                            "slug" => "everton",
                            "shortName" => "Everton",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "11",
                            "height" => 174,
                            "preferredFoot" => "Right",
                            "retired" => false,
                            "userCount" => 9702,
                            "deceased" => true,
                            "gender" => "M",
                            "id" => 386198,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 11,
                            "dateOfBirthTimestamp" => 827452800,
                            "contractUntilTimestamp" => 1782777600,
                            "proposedMarketValue" => 9200000,
                            "proposedMarketValueRaw" => [
                                "value" => 1929126,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "إيفرتون"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "إيفرتون"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Michael",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "michael",
                            "shortName" => "Michael",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "30",
                            "height" => 166,
                            "preferredFoot" => "Right",
                            "userCount" => 7299,
                            "gender" => "M",
                            "id" => 878084,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 30,
                            "dateOfBirthTimestamp" => 826588800,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 7200000,
                            "proposedMarketValueRaw" => [
                                "value" => 10358,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "ميشيل"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "ميشيل"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Gonzalo Plata",
                            "slug" => "gonzalo-plata",
                            "shortName" => "G. Plata",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "45",
                            "height" => 178,
                            "preferredFoot" => "Left",
                            "userCount" => 4378,
                            "gender" => "M",
                            "id" => 937937,
                            "country" => [
                                "alpha2" => "EC",
                                "alpha3" => "ECU",
                                "name" => "Ecuador",
                                "slug" => "ecuador"
                            ],
                            "shirtNumber" => 45,
                            "dateOfBirthTimestamp" => 973036800,
                            "contractUntilTimestamp" => 1877472000,
                            "proposedMarketValue" => 6500000,
                            "proposedMarketValueRaw" => [
                                "value" => 12963218,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "جونزالو بلاتا"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "ج. بلاتا"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Luiz Araújo",
                            "slug" => "luiz-araujo",
                            "shortName" => "L. Araújo",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "7",
                            "height" => 175,
                            "preferredFoot" => "Left",
                            "retired" => true,
                            "userCount" => 4129,
                            "deceased" => true,
                            "gender" => "M",
                            "id" => 840451,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 7,
                            "dateOfBirthTimestamp" => 833673600,
                            "contractUntilTimestamp" => 1830211200,
                            "proposedMarketValue" => 4099999,
                            "proposedMarketValueRaw" => [
                                "value" => 6919470,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Evertton",
                            "slug" => "evertton",
                            "shortName" => "Evertton",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "52",
                            "height" => 173,
                            "preferredFoot" => "Right",
                            "retired" => false,
                            "userCount" => 1017,
                            "deceased" => true,
                            "gender" => "M",
                            "id" => 1145106,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 52,
                            "dateOfBirthTimestamp" => 1046390400,
                            "contractUntilTimestamp" => 1798675200,
                            "proposedMarketValue" => 2200000,
                            "proposedMarketValueRaw" => [
                                "value" => 1072774,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "David Luiz",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "david-luiz",
                            "shortName" => "D. Luiz",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "23",
                            "height" => 189,
                            "preferredFoot" => "Right",
                            "userCount" => 7088,
                            "gender" => "M",
                            "id" => 21300,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 23,
                            "dateOfBirthTimestamp" => 546048000,
                            "contractUntilTimestamp" => 1735603200,
                            "proposedMarketValue" => 430000,
                            "proposedMarketValueRaw" => [
                                "value" => 698346,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Alex Sandro",
                            "slug" => "alex-sandro",
                            "shortName" => "A. Sandro",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "26",
                            "height" => 181,
                            "preferredFoot" => "Left",
                            "userCount" => 5851,
                            "deceased" => true,
                            "gender" => "M",
                            "id" => 84854,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 26,
                            "dateOfBirthTimestamp" => 664848000,
                            "contractUntilTimestamp" => 1798675200,
                            "proposedMarketValue" => 2100000,
                            "proposedMarketValueRaw" => [
                                "value" => 3459694,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "أليكس ساندرو"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "أ. ساندرو"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Ayrton Lucas",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "ayrton-lucas",
                            "shortName" => "Ayrton Lucas",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "6",
                            "height" => 180,
                            "preferredFoot" => "Left",
                            "retired" => false,
                            "userCount" => 3965,
                            "gender" => "M",
                            "id" => 818473,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 6,
                            "dateOfBirthTimestamp" => 866678400,
                            "contractUntilTimestamp" => 1830211200,
                            "proposedMarketValue" => 7500000,
                            "proposedMarketValueRaw" => [
                                "value" => 1703112,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Matías Viña",
                            "slug" => "matias-vina",
                            "shortName" => "M. Viña",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "17",
                            "height" => 180,
                            "preferredFoot" => "Left",
                            "userCount" => 3747,
                            "gender" => "M",
                            "id" => 875295,
                            "country" => [
                                "alpha2" => "UY",
                                "alpha3" => "URY",
                                "name" => "Uruguay",
                                "slug" => "uruguay"
                            ],
                            "shirtNumber" => 17,
                            "dateOfBirthTimestamp" => 879033600,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 10300000,
                            "proposedMarketValueRaw" => [
                                "value" => 14231630,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "فينا, ماتياس"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "م. فينا"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Léo Pereira",
                            "slug" => "leo-pereira",
                            "shortName" => "Léo Pereira",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "4",
                            "height" => 189,
                            "preferredFoot" => "Left",
                            "retired" => false,
                            "userCount" => 3067,
                            "deceased" => false,
                            "gender" => "M",
                            "id" => 358548,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 4,
                            "dateOfBirthTimestamp" => 823046400,
                            "contractUntilTimestamp" => 1830211200,
                            "proposedMarketValue" => 8400000,
                            "proposedMarketValueRaw" => [
                                "value" => 15061432,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Léo Ortiz",
                            "slug" => "leo-ortiz",
                            "shortName" => "L. Ortiz",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "3",
                            "height" => 185,
                            "preferredFoot" => "Right",
                            "retired" => false,
                            "userCount" => 2470,
                            "deceased" => false,
                            "gender" => "M",
                            "id" => 869643,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 3,
                            "dateOfBirthTimestamp" => 820627200,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 8700000,
                            "proposedMarketValueRaw" => [
                                "value" => 15899310,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Wesley França",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "wesley-franca",
                            "shortName" => "W. França",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "43",
                            "height" => 173,
                            "preferredFoot" => "Right",
                            "retired" => false,
                            "userCount" => 2414,
                            "gender" => "M",
                            "id" => 1134200,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 43,
                            "dateOfBirthTimestamp" => 1062806400,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 6400000,
                            "proposedMarketValueRaw" => [
                                "value" => 232656,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Cleiton",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "cleiton-santana",
                            "shortName" => "Cleiton",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "33",
                            "height" => 194,
                            "preferredFoot" => "Left",
                            "retired" => true,
                            "userCount" => 936,
                            "gender" => "M",
                            "id" => 1134199,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 33,
                            "dateOfBirthTimestamp" => 1051228800,
                            "contractUntilTimestamp" => 1767139200,
                            "proposedMarketValue" => 385000,
                            "proposedMarketValueRaw" => [
                                "value" => 295016,
                                "currency" => "EUR"
                            ]
                        ]
                    ]
                ],
                "foreignPlayers" => [
                    [
                        "player" => [
                            "name" => "Agustín Rossi",
                            "slug" => "agustin-rossi",
                            "shortName" => "Agustín Rossi",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "G",
                            "jerseyNumber" => "1",
                            "height" => 193,
                            "preferredFoot" => "Right",
                            "retired" => false,
                            "userCount" => 3069,
                            "deceased" => false,
                            "gender" => "M",
                            "id" => 1140986,
                            "country" => [
                                "alpha2" => "AR",
                                "alpha3" => "ARG",
                                "name" => "Argentina",
                                "slug" => "argentina"
                            ],
                            "shirtNumber" => 1,
                            "dateOfBirthTimestamp" => 808963200,
                            "contractUntilTimestamp" => 1830211200,
                            "proposedMarketValue" => 7200000,
                            "proposedMarketValueRaw" => [
                                "value" => 13133772,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Gonzalo Plata",
                            "slug" => "gonzalo-plata",
                            "shortName" => "G. Plata",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "45",
                            "height" => 178,
                            "preferredFoot" => "Left",
                            "userCount" => 4378,
                            "gender" => "M",
                            "id" => 937937,
                            "country" => [
                                "alpha2" => "EC",
                                "alpha3" => "ECU",
                                "name" => "Ecuador",
                                "slug" => "ecuador"
                            ],
                            "shirtNumber" => 45,
                            "dateOfBirthTimestamp" => 973036800,
                            "contractUntilTimestamp" => 1877472000,
                            "proposedMarketValue" => 6500000,
                            "proposedMarketValueRaw" => [
                                "value" => 12220422,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "جونزالو بلاتا"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "ج. بلاتا"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Guillermo Varela",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "guillermo-varela",
                            "shortName" => "G. Varela",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "2",
                            "height" => 171,
                            "preferredFoot" => "Right",
                            "userCount" => 2644,
                            "gender" => "M",
                            "id" => 311456,
                            "country" => [
                                "alpha2" => "UY",
                                "alpha3" => "URY",
                                "name" => "Uruguay",
                                "slug" => "uruguay"
                            ],
                            "shirtNumber" => 2,
                            "dateOfBirthTimestamp" => 732931200,
                            "contractUntilTimestamp" => 1767139200,
                            "proposedMarketValue" => 1800000,
                            "proposedMarketValueRaw" => [
                                "value" => 3036996,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "غييرمو فاريلا"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "غ. فاريلا"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Matías Viña",
                            "slug" => "matias-vina",
                            "shortName" => "M. Viña",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "17",
                            "height" => 180,
                            "preferredFoot" => "Left",
                            "userCount" => 3747,
                            "gender" => "M",
                            "id" => 875295,
                            "country" => [
                                "alpha2" => "UY",
                                "alpha3" => "URY",
                                "name" => "Uruguay",
                                "slug" => "uruguay"
                            ],
                            "shirtNumber" => 17,
                            "dateOfBirthTimestamp" => 879033600,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 10300000,
                            "proposedMarketValueRaw" => [
                                "value" => 17793176,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "فينا, ماتياس"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "م. فينا"
                                ]
                            ]
                        ]
                    ]
                ],
                "nationalPlayers" => [
                    [
                        "player" => [
                            "name" => "Giorgian De Arrascaeta",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "giorgian-de-arrascaeta",
                            "shortName" => "G. De Arrascaeta",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "14",
                            "height" => 173,
                            "preferredFoot" => "Right",
                            "retired" => true,
                            "userCount" => 37576,
                            "gender" => "M",
                            "id" => 333587,
                            "country" => [
                                "alpha2" => "UY",
                                "alpha3" => "URY",
                                "name" => "Uruguay",
                                "slug" => "uruguay"
                            ],
                            "shirtNumber" => 14,
                            "dateOfBirthTimestamp" => 770428800,
                            "contractUntilTimestamp" => 1798675200,
                            "proposedMarketValue" => 14500000,
                            "proposedMarketValueRaw" => [
                                "value" => 678432,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "جي. دي أراسكايتا"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "ج. د. أراسكايتا"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Pedro",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "pedro",
                            "shortName" => "Pedro",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => true,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "F",
                            "jerseyNumber" => "9",
                            "height" => 186,
                            "preferredFoot" => "Right",
                            "userCount" => 37360,
                            "gender" => "M",
                            "id" => 840219,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 9,
                            "dateOfBirthTimestamp" => 866764800,
                            "contractUntilTimestamp" => 1830211200,
                            "proposedMarketValue" => 22000000,
                            "proposedMarketValueRaw" => [
                                "value" => 16952454,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "بيدرو"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "بيدرو"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Fabrício Bruno",
                            "firstName" => "",
                            "lastName" => "",
                            "slug" => "fabricio-bruno",
                            "shortName" => "Fabrício Bruno",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => false,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "15",
                            "height" => 192,
                            "preferredFoot" => "Right",
                            "retired" => false,
                            "userCount" => 3737,
                            "gender" => "M",
                            "id" => 840220,
                            "country" => [
                                "alpha2" => "BR",
                                "alpha3" => "BRA",
                                "name" => "Brazil",
                                "slug" => "brazil"
                            ],
                            "shirtNumber" => 15,
                            "dateOfBirthTimestamp" => 824083200,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 6600000,
                            "proposedMarketValueRaw" => [
                                "value" => 7043992,
                                "currency" => "EUR"
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Matías Viña",
                            "slug" => "matias-vina",
                            "shortName" => "M. Viña",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => false
                                    ],
                                    "priority" => 451,
                                    "isLive" => false,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => true
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "D",
                            "jerseyNumber" => "17",
                            "height" => 180,
                            "preferredFoot" => "Left",
                            "userCount" => 3747,
                            "gender" => "M",
                            "id" => 875295,
                            "country" => [
                                "alpha2" => "UY",
                                "alpha3" => "URY",
                                "name" => "Uruguay",
                                "slug" => "uruguay"
                            ],
                            "shirtNumber" => 17,
                            "dateOfBirthTimestamp" => 879033600,
                            "contractUntilTimestamp" => 1861833600,
                            "proposedMarketValue" => 10300000,
                            "proposedMarketValueRaw" => [
                                "value" => 17114870,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "فينا, ماتياس"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "م. فينا"
                                ]
                            ]
                        ]
                    ],
                    [
                        "player" => [
                            "name" => "Gonzalo Plata",
                            "slug" => "gonzalo-plata",
                            "shortName" => "G. Plata",
                            "team" => [
                                "name" => "Flamengo",
                                "slug" => "flamengo",
                                "shortName" => "Flamengo",
                                "gender" => "M",
                                "sport" => [
                                    "name" => "Football",
                                    "slug" => "football",
                                    "id" => 1
                                ],
                                "tournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "uniqueTournament" => [
                                        "name" => "Brasileirão Série A",
                                        "slug" => "brasileirao-serie-a",
                                        "primaryColorHex" => "#C7FF00",
                                        "secondaryColorHex" => "#969696",
                                        "category" => [
                                            "name" => "Brazil",
                                            "slug" => "brazil",
                                            "sport" => [
                                                "name" => "Football",
                                                "slug" => "football",
                                                "id" => 1
                                            ],
                                            "id" => 13,
                                            "country" => [
                                                "alpha2" => "BR",
                                                "alpha3" => "BRA",
                                                "name" => "Brazil",
                                                "slug" => "brazil"
                                            ],
                                            "flag" => "brazil",
                                            "alpha2" => "BR"
                                        ],
                                        "userCount" => 324997,
                                        "id" => 325,
                                        "country" => [],
                                        "displayInverseHomeAwayTeams" => true
                                    ],
                                    "priority" => 451,
                                    "isLive" => true,
                                    "id" => 83
                                ],
                                "primaryUniqueTournament" => [
                                    "name" => "Brasileirão Série A",
                                    "slug" => "brasileirao-serie-a",
                                    "primaryColorHex" => "#C7FF00",
                                    "secondaryColorHex" => "#969696",
                                    "category" => [
                                        "name" => "Brazil",
                                        "slug" => "brazil",
                                        "sport" => [
                                            "name" => "Football",
                                            "slug" => "football",
                                            "id" => 1
                                        ],
                                        "id" => 13,
                                        "country" => [
                                            "alpha2" => "BR",
                                            "alpha3" => "BRA",
                                            "name" => "Brazil",
                                            "slug" => "brazil"
                                        ],
                                        "flag" => "brazil",
                                        "alpha2" => "BR"
                                    ],
                                    "userCount" => 324997,
                                    "id" => 325,
                                    "country" => [],
                                    "displayInverseHomeAwayTeams" => false
                                ],
                                "userCount" => 737953,
                                "nameCode" => "FLA",
                                "disabled" => false,
                                "national" => true,
                                "type" => 0,
                                "id" => 5981,
                                "country" => [
                                    "alpha2" => "BR",
                                    "alpha3" => "BRA",
                                    "name" => "Brazil",
                                    "slug" => "brazil"
                                ],
                                "teamColors" => [
                                    "primary" => "#ff0000",
                                    "secondary" => "#000000",
                                    "text" => "#000000"
                                ],
                                "fieldTranslations" => [
                                    "nameTranslation" => [
                                        "ru" => "ФК Фламенго РЖ"
                                    ],
                                    "shortNameTranslation" => []
                                ]
                            ],
                            "position" => "M",
                            "jerseyNumber" => "45",
                            "height" => 178,
                            "preferredFoot" => "Left",
                            "userCount" => 4378,
                            "gender" => "M",
                            "id" => 937937,
                            "country" => [
                                "alpha2" => "EC",
                                "alpha3" => "ECU",
                                "name" => "Ecuador",
                                "slug" => "ecuador"
                            ],
                            "shirtNumber" => 45,
                            "dateOfBirthTimestamp" => 973036800,
                            "contractUntilTimestamp" => 1877472000,
                            "proposedMarketValue" => 6500000,
                            "proposedMarketValueRaw" => [
                                "value" => 6579034,
                                "currency" => "EUR"
                            ],
                            "fieldTranslations" => [
                                "nameTranslation" => [
                                    "ar" => "جونزالو بلاتا"
                                ],
                                "shortNameTranslation" => [
                                    "ar" => "ج. بلاتا"
                                ]
                            ]
                        ]
                    ]
                ],
                "supportStaff" => []
            ]
        ];

        //dd(count($jogadores[0]['players']));

        $InicioController = new InicioController();
        $InicioController->inicio($jogos, $jogadores);
    }
}
