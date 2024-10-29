import { api } from './api';

const buscarJogos = async () => {
  console.log(api.defaults.baseURL); // Verifique se o baseURL está correto
  
  try {
    const response = await api.get(`/v1/inicio/jogos`);
    console.error(response.data);
    if (response.status == 200) {
      return { jogos: response.data.jogos };
    }
  } catch (error) {
    console.error(error);
    return { message: 'Jogador Inválido.' };
  }
};

export default buscarJogos;