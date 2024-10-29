import axios from "axios";

export const api = axios.create({
    baseURL: "http://localhost:8000/api"
})

export const apiGlobo = axios.create({
    baseURL: "https://api.globoesporte.globo.com/tabela/d1a37fa4-e948-43a6-ba53-ab24ab3a45b1",
    timeout: 10000, // define um tempo limite para as requisições
});