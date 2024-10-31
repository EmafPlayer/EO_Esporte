import { useEffect, useState } from "react";
import { NavBar } from "../componentes/nav_bar";
import buscarJogos from "../apis/buscarJogos";
import { FaArrowLeft, FaArrowRight } from "react-icons/fa6";
import { format, parse } from "date-fns";
import { ptBR } from 'date-fns/locale';


export function Jogos () {
    
    const [jogos, setJogos] = useState([]);
    const [contador, setContador] = useState(1);

    const formatarDataHora = (data) => {
        const dataFormatada = format(parse(data, 'yyyy-MM-dd', new Date()), 'dd/MM/yyyy - EEEE', { locale: ptBR });
        
        const diaDaSemanaFormatado = dataFormatada
            .replace('-feira', '')
            .replace(/\b(segunda|terça|quarta|quinta|sexta|sábado|domingo)/gi, match => 
                match.charAt(0).toUpperCase() + match.slice(1).toLowerCase()
            );

        return `${diaDaSemanaFormatado}`;
    };

    function nextPage () {
        if (contador < jogos.length - 1)
            setContador(contador + 1);
    }

    function lastPage () {
        if (contador > 0)
            setContador(contador - 1);
    }

    useEffect(() => {
        const fetchData = async () => {
            const data = await buscarJogos();
            console.log("Dados retornados de buscarTabela:", data);

            if (data?.jogos) {
                setJogos(data.jogos);
            } else {
                console.warn("Tabela não encontrada ou dados inválidos:");
            }
        };

        fetchData();
    }, []);

    // Verifica se 'jogos' está carregado e 'contador' está dentro do índice válido
    if (jogos.length === 0 || !jogos[contador]) {
        return <p className="text-100px">Carregando...</p>;
    }

    return (
        <div className="bg-slate-100">
            <NavBar typePage={1} />
            <main className="w-full pt-6 translate-y-[138px] bg-slate-100 pb-[4.7rem]">
                <div className="w-full px-20 flex items-center justify-between">
                    <button onClick={lastPage}><FaArrowLeft className="text-[50px]" /></button>
                    <p className="text-[30px]">{contador + 1}ª Rodada</p>
                    <button onClick={nextPage}><FaArrowRight className="text-[50px]" /></button>
                </div>
                <div className="mt-14 grid grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 px-10 gap-4">
                    {jogos[contador].map((jogo, index) => 
                       <div className="bg-[#ffffff] shadow-md border-2 border-[#a1a1a1d3] px-2 rounded-md h-48  col-span-1 "> 
                            <div key={index} className="justify-between flex items-center h-[85%]">
                                <div className="pt-2 w-28 flex flex-wrap justify-center">
                                    <img src={jogo.escudo_clube_casa} alt="logo time" width='80px'/>
                                    <p className="text-center pt-1 font-sans">{jogo.nome_clube_casa}</p>
                                </div>
                                <div className="flex gap-8">
                                    <p className="text-[35px] font-medium">{jogo.status === 1 ? jogo.gols_clube_casa : ''}</p>
                                    <p className="mt-3 font-medium text-xl">X</p>
                                    <p className="text-[35px] font-medium">{jogo.status === 1 ? jogo.gols_clube_fora : ''}</p>
                                </div>
                                <div className="pt-2 w-28 flex flex-wrap justify-center">
                                    <img src={jogo.escudo_clube_fora} alt="logo time" width='80px'/>
                                    <p className="text-center pt-1 font-sans">{jogo.nome_clube_fora}</p>
                                </div>
                            </div>
                            <div>
                                <p className="text-center text-[14px]">{formatarDataHora(jogo.data_partida)}</p>
                            </div>
                        </div>
                    )}
                </div>
            </main>
        </div>
    );
}
