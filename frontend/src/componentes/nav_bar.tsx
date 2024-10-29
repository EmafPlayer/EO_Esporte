import { Link } from './nav_link';
import FotoCampo from "../../public/football-pitch-icon-51e7b6.webp"

export function NavBar(){
    return(
        <nav className="h-[8rem] w-full flex justify-between px-12 items-center bg-[#06AA48] bg-gradient-to-r from-[#06AA48] to-[#23cf68] fixed z-10 border-b border-dashed">
            <div className='flex items-center gap-3'>
                <img src={FotoCampo} alt="Foto Brasileirão" className="h-[50px] w-[50px]" />
                <a href="/" className='text-[24px] text-[#FFFFFF] font-medium'>EO Esportes</a>
            </div>
            <div>
                <h1 className="text-[#FFFFFF] pl-[10rem] font-light text-[42px] cursor-pointer">Brasileirão Série A</h1>
            </div>
            <div className='flex items-center'>
                <ul className="flex gap-2">
                <li><Link href="/tabela">Tabela</Link></li>
                <li><Link href="/jogos">Jogos</Link></li>
              </ul>
            </div>
          </nav>
    )
}