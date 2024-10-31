import { useEffect, useState } from "react";
import { NavBar } from "../componentes/nav_bar";
import { api } from "../apis/api";
import buscarClubes from "../apis/buscarClubes";


export function Clubes () {

    const [clubes, setClubes] = useState([])

    useEffect(() => {
        const fetchData = async () => {
          await api.get('/v1/inicio/elenco');
        };
        fetchData();
      }, []);

    useEffect(() => {
        const fetchData = async () => {
            const data = await buscarClubes();
            console.log("Dados retornados de buscarTabela:", data);
    
            if (data?.clubes) {
                setClubes(data.clubes);
            } else {
                console.warn("Tabela não encontrada ou dados inválidos:");
            }
        };
    
        fetchData();
    }, []);

    return (

        <view className="bg-slate-100">
            <NavBar typePage={3} ></NavBar>
            <body className="w-full pb-10 pt-3 px-3 translate-y-[130px] bg-slate-100 gap-6 grid grid-cols-5 ">
                {clubes.map((clube) =>
                <a href={`/clubes/elenco/${clube.id}`} className="py-4 hover:bg-slate-200 rounded-lg shadow-md border-2 border-[#a1a1a1d3] border-3">
                    <div className="pt-2 col-span-1 mb-8 flex h-28 flex-wrap justify-center">                    
                        <img src={clube.escudo} alt="Escudo" width='100px'></img>
                    </div>
                    <div>
                        <p className="h-8 text-lg text-center">{clube.nome}</p>
                    </div>
                </a>
                )}
            </body>
        </view>

    )
}