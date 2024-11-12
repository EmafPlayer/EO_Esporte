import { api } from './api';

const buscarClubes = async () => {
  console.log(api.defaults.baseURL); // Verifique se o baseURL está correto
  
  try {
    const response = await api.get(`/v1/inicio/clubes`);
    console.error(response.data);
    if (response.status == 200) {
      return { clubes: response.data.clubes };
    }
  } catch (error) {
    console.error(error);
    return { message: 'Erro ao fazer a requisição' };
  }
};

export default buscarClubes;