import { NavBar } from "./nav_bar";
import FotoBrasileirao from "../public/Green Frame Grid Football Team Presentation (1).svg"

export function Inicio() {

  return (
    <div>
      <NavBar>
      </NavBar>
      <body className="p-1 flex items-center justify-center w-full">
          <img src={FotoBrasileirao} alt="Foto Brasileirão" className="h-[55rem] w-full" />
      </body>
    </div>

  )
}

