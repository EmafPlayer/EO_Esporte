import { Route, Routes } from "react-router-dom";
import { Pages } from "./src";
import React from "react";

export function Router() {
  return (
    <Routes>
      <Route path="/inicio" element={<Pages.Inicio/>} />
    </Routes>
  );
}