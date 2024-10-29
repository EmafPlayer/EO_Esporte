import { Route, Routes } from "react-router-dom";
import { Pages } from "./src";
import React from "react";

export function Router() {
  return (
    <Routes>
      <Route path="/" element={<Pages.Inicio/>} />
      <Route path="/tabela" element={<Pages.Tabela/>} />
      <Route path="/jogos" element={<Pages.Jogos/>} />
    </Routes>
  );
}