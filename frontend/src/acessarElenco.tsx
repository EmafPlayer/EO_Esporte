import { useParams } from "react-router-dom";

import { Elenco } from "./pages/elenco";

export function AcessarElenco() {

    const { id_clube } = useParams();

    return (
        <Elenco id_clube={id_clube ? Number.parseInt(id_clube,10) : null}/>
    )
}
