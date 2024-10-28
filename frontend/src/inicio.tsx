import { useState } from "react";
import { NavBar } from "./nav_bar";
import buscarJogos from "./buscarJogos";

export function Inicio() {

  const [disciplinas, setJogos] = useState([]);

  window.onload = async () => {
    const data = await buscarJogos();
    setJogos(data?.jogos);
    console.log(disciplinas)
  }

  return (
    <div className="">
      <NavBar>
      </NavBar>
      <body className="bg-[url('./Futebol.svg')] bg-cover bg-center h-screen w-full p-1 flex items-center justify-center z-0 translate-y-28">
      </body>
    </div>

  )
}

