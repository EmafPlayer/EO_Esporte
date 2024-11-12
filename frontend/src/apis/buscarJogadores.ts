import { api } from './api';

const buscarJogadores = async ( id_clube: number ) => {
  console.log(api.defaults.baseURL); // Verifique se o baseURL está correto
  console.log(id_clube);  
  try {
    const response = await api.get(`/v1/inicio/jogadores/${id_clube}`);
    console.error(response.data);
    if (response.status == 200) {
      return { jogadores: response.data.jogadores };
    }
  } catch (error) {
    console.error(error);
    return { message: 'Erro ao fazer a requisição' };
  }
};

export default buscarJogadores;