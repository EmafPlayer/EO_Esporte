# EO_Esporte - Projeto de Coleta e Exposição de Dados do Campeonato Brasileiro Série A

Este projeto é uma aplicação completa desenvolvida para automatizar a coleta, organização e visualização de dados de partidas de futebol do brasileirão série A. Focada em capturar algumas informações sobre cada jogo, e está pronta para atualização contínua com novos dados, oferecendo uma solução robusta para armazenar e consultar esses registros.

## Funcionalidades Principais

- **Coleta de Dados de Jogos**: Realiza a coleta automática de dados de jogos passados e futuros do brasileirão série A. Para jogos futuros, os dados são atualizados no sistema assim que a partida termina.
  
- **Informações Coletadas**:
  - Dados gerais: times, placar final, estádio e jogadores.

- **Armazenamento e Organização dos Dados**:
  - Banco de dados SQL estruturado para armazenar todas as informações coletadas, facilitando consultas e análises posteriores.
  - Exemplo de queries e um diagrama relacional estão incluídos para facilitar o entendimento do banco de dados e suas relações.

- **Interface Interativa**:
  - Uma interface amigável e intuitiva para visualização dos dados principais.
  - Exibição de estatísticas detalhadas de partidas, desempenho de times e jogadores, e outras informações relevantes para análise de performance.

## Tecnologias Utilizadas

- **Back-end**: Desenvolvido com o Laravel (framework do PHP) para coleta de dados e comunicação com o banco de dados.
- **Banco de Dados**: SQL com estrutura relacional para organizar as informações de forma eficaz.
- **Front-end**: Interface construída com o React (framework do JavaScript) para visualização de dados em tempo real.

## Estrutura do Banco de Dados

O banco de dados foi modelado para representar as principais informações de cada partida e seus elementos de maneira organizada. Ele inclui tabelas para:
- **Jogos**: Dados gerais da partida, incluindo data, horário, placar e local.
- **Clubes**: Informações sobre os times participantes e suas classificações.
- **Treinadores**: Dados gerais dos Treinadores de cada time.
- **Jogadores**: Dados gerais dos Jogadores de cada time.
- **Tabela de Pontuação**: Dados gerais da tabela de pontuação, incluindo Partidas Jogadas, Vitórias, Derrotas, Empates, Gols Pros, Gols Contras e Saldo de Gols.

> Para mais detalhes, consulte o diagrama relacional e as queries de exemplo incluídas no projeto.

## Como Utilizar o Projeto

1. **Execução do Back-end**: digite 'php artisan serve' no pasta do backend.
2. **Interface de Visualização**: digite 'npm run dev' na pasta do frontend.
