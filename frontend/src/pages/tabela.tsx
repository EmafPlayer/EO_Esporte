import { useEffect, useState } from "react";
import buscarTabela from "../apis/buscarTabela";
import { NavBar } from "../componentes/nav_bar";
import { twMerge } from "tailwind-merge";

export function Tabela(){
    
    const [tabela, setTabela] = useState([]);

    // Fará a requisição dos dados da tabela de pontuações armazenados no banco de dados
    useEffect(() => {
        const fetchData = async () => {
            const data = await buscarTabela();
            console.log("Dados retornados de buscarTabela:", data);

            if (data?.tabela) {
                setTabela(data.tabela);
            } else {
                console.warn("Tabela não encontrada ou dados inválidos:");
            }
        };

        fetchData();
    }, []);
    
    return(
        <div className=" bg-slate-100">
            <NavBar typePage={2}>
            </NavBar>
            <main className="w-full translate-y-[138px] pb-28 bg-slate-100">
                <div className="flex justify-center">
                    <h1 className="pt-14 font-medium text-[30px] pb-10">TABELA</h1>
                </div>
                <div className="flex justify-center pl-32 w-full">
                    <table className="border-[0.2px] z-0 border-solid border-[#414040] rounded-md shadow-md table-auto divide-y divide-[#000000] w-[83%]">
                        <thead className="w-full">
                            <tr>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[15%] border-[2px] border-solid border-[#414040]">Classificação</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">P</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">J</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">V</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">E</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">D</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">GP</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">GC</th>
                                <th className="py-1 font-extrabold text-[14px] text-[#fefefe] bg-[#555a57be] w-[9%] border-[2px] border-solid border-[#414040]">SG</th>
                            </tr>
                        </thead>
                        <tbody className="bg-[#fefefe] divide-y divide-[#b9b8b8]">
                            {tabela.map((linha, index) => 
                                <tr key={linha.id}>
                                    <td className={twMerge('py-[14px] items-center font-medium flex gap-2 border-x-[0.4px] border-solid border-l-8 border-[#b9b8b8]', ((index+1 > 0) && (index+1 <= 4) ? 'border-l-[#06AA48]' : 
                                                                                                                                                            ((index+1 >= 5) && (index+1 <= 6) ? 'border-l-[#3086DB]' : 
                                                                                                                                                            ((index+1 >= 7) && (index+1 <= 12) ? 'border-l-[#998CDB]' : 
                                                                                                                                                            ((index+1 >= 13) && (index+1 <= 16) ?  'border-l-slate-200' : 'border-l-[#E00E00]')))), index+1 > 9 ? 'px-[10px]' : 'px-4 ')}>
                                        <div className={twMerge('w-[20%] flex items-center justify-between', index+1 > 9 ? 'mr-[8px]' : 'mr-[6px]')}>
                                            <p className={twMerge('font-medium text-[14px]', index+1 > 9 ? 'pr-[9px]' : 'pr-[11px]')}>{index+1}</p>
                                            <img src={linha.escudo} alt="logo time" width='20px'/>
                                        </div>
                                        <div className="w-[80%]">
                                            <p className="text-left text-[14px]">{linha.nome}</p>
                                        </div>
                                    </td>
                                    <td className="text-[14px] font-medium bg-slate-200 text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.pontos}</td>
                                    <td className="text-[14px] font-medium text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.jogos}</td>
                                    <td className="text-[14px] font-medium bg-slate-200 text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.vitorias}</td>
                                    <td className="text-[14px] font-medium text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.empates}</td>
                                    <td className="text-[14px] font-medium bg-slate-200 text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.derrotas}</td>
                                    <td className="text-[14px] font-medium text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.gols_pros}</td>
                                    <td className="text-[14px] font-medium bg-slate-200 text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.gols_contras}</td>
                                    <td className="text-[14px] font-medium text-center border-x-[0.4px] border-solid border-[#b9b8b8]">{linha.saldo_gols}</td>

                                </tr>          
                            )}
                        </tbody>
                    </table>
                    <ul className="pl-6 pb-2 gap-11 pt-9">
                        <li className="flex items-center justify-start gap-2">
                            <div className="bg-[#06AA48] h-2 w-2"></div>
                            <p className="text-[15px] font-serif">libertadores</p>
                        </li>
                        <li className="flex items-center justify-start gap-2">
                            <div className="bg-[#3086DB] h-2 w-2"></div>
                            <p className="text-[15px] font-serif">pré-libertadores</p>
                        </li>
                        <li className="flex items-center justify-start gap-2">
                            <div className="bg-[#998CDB] h-2 w-2"></div>
                            <p className="text-[15px] font-serif">sul-americana</p>
                        </li>
                        <li className="flex items-center justify-start gap-2">
                            <div className="bg-[#E00E00] h-2 w-2"></div>
                            <p className="text-[15px] font-serif">rebaixados</p>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
    )
}