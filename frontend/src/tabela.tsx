import { useState } from "react";
import buscarTabela from "./buscarJogos";
import { NavBar } from "./nav_bar";

export function Tabela(){
    
    const [tabela, setTabela] = useState([]);

    window.onload = async () => {
        const data = await buscarTabela();
        setTabela(data?.tabela);
        console.log(tabela)
    }
    
    return(
        <div>
        <NavBar>
        </NavBar>
        </div>
    )
}