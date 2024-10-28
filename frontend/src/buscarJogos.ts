
import { api } from './api';

const buscarTabela = async () => {

  try {
    const response = await api.get(`v1/inicio/tabela`)

    if (response.status === 200) { //testa se o login foi validado como correto
      return { tabela: response.data.tabela };
    }
  } catch(error){
    return { message: 'Professor Inválido.' };
  }
  
};

export default buscarTabela;