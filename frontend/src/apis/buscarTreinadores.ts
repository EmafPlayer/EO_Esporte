import { api } from './api';

const buscarTreinadores = async ( id_clube: number ) => {
  console.log(api.defaults.baseURL); // Verifique se o baseURL está correto
  
  try {
    const response = await api.get(`/v1/inicio/treinadores/${id_clube}`);
    console.error(response.data);
    if (response.status == 200) {
      return { treinador: response.data.treinador };
    }
  } catch (error) {
    console.error(error);
    return { message: 'Erro ao fazer a requisição' };
  }
};

export default buscarTreinadores;