import axios from 'axios';
import { apiGlobo } from './api';

const buscarJogosGe = async () => {
  console.log(apiGlobo.defaults.baseURL); // Verifique se o baseURL está correto
  
  try {

    const response = await axios.get('https://api.globoesporte.globo.com/tabela/d1a37fa4-e948-43a6-ba53-ab24ab3a45b1/fase/fase-unica-campeonato-brasileiro-2024/rodada/1/jogos/');
    console.log(response.data);
    return { jogos: response.data };

  } catch (error) {

    console.error('Erro ao testar a API:', error);
    return { message: 'jogos Inválido.' };
    
  }
};

export default buscarJogosGe;