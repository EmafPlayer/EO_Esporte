import { useLocation, useParams } from "react-router-dom";
import { NavBar } from "../componentes/nav_bar";
import buscarJogadores from "../apis/buscarJogadores";
import buscarTreinadores from "../apis/buscarTreinadores";
import { useEffect, useState } from "react";
import FotoDesconhecido from "../../public/Person.png"

type TipoParametro = {
    id_clube: number | null;
};

export function Elenco( { id_clube }: TipoParametro ){


    const[jogadores, setJogadores] = useState([]);
    const[treinador, setTreinadores] = useState([])

    useEffect(() => {
        const fetchData = async () => {
            const dataJogadores = await buscarJogadores(id_clube);
            const dataTreinador = await buscarTreinadores(id_clube);
            console.log("Dados retornados de buscarJogadores:", dataJogadores);
            console.log("Dados retornados de buscarTreinadores:", dataTreinador);

            if (dataTreinador?.treinador && dataJogadores?.jogadores) {
                setJogadores(dataJogadores.jogadores);
                setTreinadores(dataTreinador.treinador);
            } else {
                console.warn("Tabela não encontrada ou dados inválidos:");
            }
        };

        fetchData();
    }, []);

    console.log(jogadores);

    if (jogadores.length === 0 && treinador.length === 0) {
        return <p className="text-100px">Carregando...</p>;
    }

    console.log(treinador[0].nome_clube);

    return(
        <view className="bg-slate-100">
            <NavBar typePage={3}></NavBar>
            <body className="w-full pt-[7rem] translate-y-[126px] bg-slate-100 pb-[4.7rem]">
                <div className="h-[6rem] mb-40 px-32 flex items-center justify-between">
                    <div className="py-4 cursor-pointer rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                        <div className="pt-2 mb-8 flex h-28 w-[12rem] flex-wrap justify-center">                    
                            <img src={treinador[0].escudo} alt="Escudo" width='100px'></img>
                        </div>
                        <div>
                            <p className="h-8 text-lg text-center">{treinador[0].nome_clube}</p>
                        </div>
                    </div>
                    <div className="pt-4 cursor-pointer rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                        <div>
                            <div className="pt-2 rounded-sm col-span-1 mb-8 flex h-28 w-[12rem] flex-wrap justify-center">                   
                                <img src={FotoDesconhecido} alt="Escudo" width='100px'></img>
                            </div>
                            </div>
                                <p className="h-8 mb-3 text-lg text-center">{treinador[0].nome_treinador}</p>
                            <div>
                        </div>
                        <div className="flex px-2 items-center justify-between bg-slate-200 border-t-1 border border-[#a1a1a1d3]">
                            <p className="text-base text-center">Treinador</p>
                            <p className="text-lg text-center">{treinador[0].pais_origem}</p>
                        </div>
                    </div>
                </div>
                <h1 className="w-full px-32 mb-8 text-[26px] font-medium">Atacantes</h1>
                <div className="grid grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 mb-16 gap-20 px-32">
                    {jogadores[1].map((jogador) => 
                        <div className="pt-4 cursor-pointer rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                            <div>
                                <div className="pt-2 w-full rounded-sm col-span-1 mb-8 flex h-28 flex-wrap justify-center">                   
                                    <p className="bg-slate-200 rounded-full w-[106px] flex justify-center text-center items-center text-[30px]">{jogador.numero}</p>
                                </div>
                                </div>
                                    <p className="h-8 mb-3 text-lg text-center">{jogador.nome_jogador}</p>
                                <div>
                            </div>
                            <div className="flex px-6 items-center justify-between bg-slate-200 border-t-1 border border-[#a1a1a1d3]">
                                <p className="text-base text-center">{jogador.sigla_posicao}</p>
                                <p className="text-lg text-center">{jogador.nacionalidade}</p>
                            </div>
                        </div>
                    )}
                </div>
                <h1 className="w-full px-32 mb-8 text-[26px] font-medium">Meia</h1>
                <div className="grid grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 mb-16 gap-20 px-32">
                    {jogadores[2].map((jogador) => 
                        <div className="pt-4 cursor-pointer rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                            <div>
                                <div className="pt-2 w-full rounded-sm col-span-1 mb-8 flex h-28 flex-wrap justify-center">                   
                                    <p className="bg-slate-200 rounded-full w-[106px] flex justify-center text-center items-center text-[30px]">{jogador.numero}</p>
                                </div>
                                </div>
                                    <p className="h-8 mb-3 text-lg text-center">{jogador.nome_jogador}</p>
                                <div>
                            </div>
                            <div className="flex px-6 items-center justify-between bg-slate-200 border-t-1 border border-[#a1a1a1d3]">
                                <p className="text-base text-center">{jogador.sigla_posicao}</p>
                                <p className="text-lg text-center">{jogador.nacionalidade}</p>
                            </div>
                        </div>
                    )}
                </div>
                <h1 className="w-full px-32 mb-8 text-[26px] font-medium">Defensor</h1>
                <div className="grid grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 mb-16 gap-20 px-32">
                    {jogadores[3].map((jogador) => 
                        <div className="pt-4 cursor-pointer rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                            <div>
                                <div className="pt-2 w-full rounded-sm col-span-1 mb-8 flex h-28 flex-wrap justify-center">                   
                                    <p className="bg-slate-200 rounded-full w-[106px] flex justify-center text-center items-center text-[30px]">{jogador.numero}</p>
                                </div>
                                </div>
                                    <p className="h-8 mb-3 text-lg text-center">{jogador.nome_jogador}</p>
                                <div>
                            </div>
                            <div className="flex px-6 items-center justify-between bg-slate-200 border-t-1 border border-[#a1a1a1d3]">
                                <p className="text-base text-center">{jogador.sigla_posicao}</p>
                                <p className="text-lg text-center">{jogador.nacionalidade}</p>
                            </div>
                        </div>
                    )}
                </div>
                <h1 className="w-full px-32 mb-8 text-[26px] font-medium">Goleiro</h1>
                <div className="grid grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 mb-6 gap-20 px-32">
                    {jogadores[4].map((jogador) => 
                        <div className="pt-4 cursor-pointer rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                            <div>
                                <div className="pt-2 w-full rounded-sm col-span-1 mb-8 flex h-28 flex-wrap justify-center">                   
                                    <p className="bg-slate-200 rounded-full w-[106px] flex justify-center text-center items-center text-[30px]">{jogador.numero}</p>
                                </div>
                                </div>
                                    <p className="h-8 mb-3 text-lg text-center">{jogador.nome_jogador}</p>
                                <div>
                            </div>
                            <div className="flex px-6 items-center justify-between bg-slate-200 border-t-1 border border-[#a1a1a1d3]">
                                <p className="text-base text-center">{jogador.sigla_posicao}</p>
                                <p className="text-lg text-center">{jogador.nacionalidade}</p>
                            </div>
                        </div>
                    )}
                </div>
            </body>
        </view>
    )

}