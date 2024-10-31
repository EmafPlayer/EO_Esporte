import { Route, Routes } from "react-router-dom";
import { Pages } from "./src";

export function Router() {
  return (
    <Routes>
      <Route path="/" element={<Pages.Inicio/>} />
      <Route path="/tabela" element={<Pages.Tabela/>} />
      <Route path="/jogos" element={<Pages.Jogos/>} />
      <Route path="/clubes" element={<Pages.Clubes/>}/>
      <Route path="/clubes/elenco/:id_clube" element={<Pages.AcessarElenco/>}/>
    </Routes>
  );
}