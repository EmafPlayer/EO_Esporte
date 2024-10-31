import { Link } from './nav_link';
import FotoCampo from "../../public/football-pitch-icon-51e7b6.webp"
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
        <nav className="h-[8rem] w-full flex justify-between px-12 items-center bg-[#759EF0] bg-gradient-to-r from-[#759EF0] to-[##48B6F0] fixed z-10 border-b border-dashed">
            <div className='pl-[4rem] flex items-center gap-3'>
                <img src={FotoCampo} alt="Foto Brasileirão" className="h-[50px] w-[50px]" />
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