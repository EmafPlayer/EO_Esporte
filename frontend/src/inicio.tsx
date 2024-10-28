import { useEffect, useState } from "react";
import { NavBar } from "./nav_bar";
import buscarJogos from "./buscarJogos";

export function Inicio() {

  const [jogos, setJogos] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
        const data = await buscarJogos();
        console.log("Dados retornados de buscarJogos:", data);

        if (data) {
          setJogos(data?.jogos);
        } else {
          console.warn("Tabela não encontrada ou dados inválidos:");
        }
    };

    fetchData();
  }, []);

  return (
    <div className="">
      <NavBar>
      </NavBar>
      <body className="bg-[url('./Futebol.svg')] bg-cover bg-center h-screen w-full p-1 flex items-center justify-center z-0 translate-y-28">
      </body>
    </div>

  )
}

