import { Link } from './nav_link';
import FotoBola from "../../public/Bola.png"
import { useState } from 'react';

export function NavBar( typePage ){

    const [jogos, setJogos] = useState(false);
    const [tabela, setTabela] = useState(false);
    const [clubes, setClubes] = useState(false);

    if(typePage == 1)
        setJogos(true);
    else if(typePage == 2)
        setTabela(true);
    else if(typePage == 3)
        setClubes(true);
    

    return(
        <nav className="h-[8rem] w-full flex justify-between px-12 items-center bg-[#2e9fd7] bg-gradient-to-r from-[#2e9fd7] to-[#759EF0] fixed z-10 border-b">
            <div className='pl-[1rem] flex items-center gap-3'>
                <img src={FotoBola} alt="Foto Brasileirão" className="h-[70px] w-[70px]" />
                <a href="/" className='text-[24px] text-[#FFFFFF] font-medium'>EO Esportes</a>
            </div>
            <div>
                <h1 className="text-[#FFFFFF] pl-[12rem] font-light text-[42px] cursor-pointer">Brasileirão Série A</h1>
            </div>
            <div className='flex items-center'>
                <ul className="flex gap-2">
                <li><Link typePage={jogos} href="/jogos">Jogos</Link></li>
                <li><Link typePage={tabela} href="/tabela">Tabela</Link></li>
                <li><Link typePage={clubes} href="/clubes">Clubes</Link></li>
              </ul>
            </div>
          </nav>
    )
}