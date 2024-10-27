import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import { Inicio } from './inicio.tsx'
import './index.css'

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <Inicio/>
  </StrictMode>,
)
