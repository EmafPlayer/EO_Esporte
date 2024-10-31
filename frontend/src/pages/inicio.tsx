import { useEffect, useState } from "react";
import { NavBar } from "../componentes/nav_bar";
import { api } from "../apis/api";

export function Inicio() {

  useEffect(() => {
    const fetchData = async () => {
      await api.get('/v1/inicio');
    };
    fetchData();
  }, []);

  return (
    <div className="">
      <NavBar>
      </NavBar>
      <body className="bg-[url('./Fundo.svg')] bg-cover bg-center h-screen w-full p-1 flex items-center justify-center z-0 translate-y-28">
      </body>
    </div>

  )
}

