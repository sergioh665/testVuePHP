import axios from 'axios';

// Criação da instância do Axios
const api = axios.create({
  baseURL: 'http://localhost:5173/api', // URL base para as requisições
  timeout: 10000, // Timeout de 10 segundos
  headers: {
    'Content-Type': 'application/json',
  },
  withCredentials: true,
});

// Interceptores (opcional) - para manipular requisições e respostas
api.interceptors.request.use(
  (config) => {
    // Adicionar token de autenticação ou outras configurações (se necessário)
    const token = "dasgsfdgreghdfgg43646456";
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  (error) => {
    // Lidar com erros de requisição
    return Promise.reject(error);
  }
);

api.interceptors.response.use(
  (response) => {
    // Manipular a resposta da API
    return response;
  },
  (error) => {
    // Lidar com erros de resposta
    if (error.response && error.response.status === 401) {
      console.error('Usuário não autorizado, faça login novamente.');
    }
    return Promise.reject(error);
  }
);

export default api;