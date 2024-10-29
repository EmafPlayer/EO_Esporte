
import { api } from './api';

const buscarTabela = async () => {
  console.log(api.defaults.baseURL); // Verifique se o baseURL está correto
  
  try {
    const response = await api.get(`/v1/inicio/tabela`);
    console.error(response.data);
    if (response.status == 200) {
      return { tabela: response.data.tabela };
    }
  } catch (error) {
    console.error(error);
    return { message: 'Jogador Inválido.' };
  }
};

export default buscarTabela;