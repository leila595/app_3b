
# Sistema de Gestão de Escritorios Contabeis

Este ChatGPT Image 10 de abr. de 2025, 10_23_31projeto tem como finalidade criar um sistema de gerenciamento contabel. Um sistema completo para otimizar a gestão de escritórios contábeis, automatizando processos, organizando clientes e facilitando a conformidade fiscal.
[!logo](logo.png)

## Autores

- Ester Paiva
- Luana Nunes Carvalho
- Leilane Campos da Costa (https://github.com/leila595)

## Stack utilizada


- **Linguagens**: JavaScript, HTML, CSS  
- **Framework Backend**: Visual studio code, Laravel
- **Framework Frontend**: Visual.code  
- **Banco de Dados**: MySQL 
- **Autenticação**: JWT (JSON Web Tokens)  
- **Ferramentas Auxiliares**:  
  - Docker (para conteinerização)  
  - Git (controle de versão)  
  - Swagger (documentação da API)  

## Instalação

 

| **Etapa**          | **Comando/Ação**                          | **Descrição**                                  |
|--------------------|------------------------------------------|----------------------------------------------|
| **Clonar Repositório** | `git clone https://github.com/seu-usuario/api-gestao-contabil.git` | Baixa o código fonte do projeto. |
| **Acessar Diretório** | `cd api-gestao-contabil`                | Entra na pasta raiz do projeto. |
| **Instalar Dependências** | `npm install` ou `yarn install`       | Instala as bibliotecas necessárias. |
| **Configurar `.env`** | Criar arquivo baseado no `.env.example` | Define variáveis de ambiente (banco de dados, JWT, etc.). |
| **Executar Migrations** | `npx knex migrate:latest` ou `npx sequelize-cli db:migrate` | Cria tabelas no banco de dados. |
| **Popular Banco (Opcional)** | `npx knex seed:run`                | Insere dados iniciais para testes. |
| **Iniciar API**    | `npm run dev` (dev) ou `npm start` (prod) | Sober o servidor backend. |
| **Docker (Opcional)** | `docker-compose up -d`                | Sobe containers do PostgreSQL e da API. |


## Funcionalidades

 Gestão de Clientes

login, edição e exclusão de clientes.

Histórico de transações e documentos.

 Emissão de Documentos Fiscais

Geração automática de notas fiscais e recibos.

Integração com APIs de contabilidade (ex.: Receita WS).


 Autenticação Segura

Login com JWT e controle de permissões por cargo (admin, contador, assistente).

 Integrações

Bancos (via OFX/CSV).

Sistemas de nota fiscal eletrônica (NFe).



## Contribuindo



Este sistema de **gestão contábil** oferece:  

 **Automação de processos**  
- Elimina tarefas manuais (cadastro de clientes, emissão de documentos).  
- Reduz erros humanos em cálculos fiscais.  

# Sistema de Gestão de Escritorios Contabeis

Este projeto tem como finalidade criar um sistema de gerenciamento contabel. Um sistema completo para otimizar a gestão de escritórios contábeis, automatizando processos, organizando clientes e facilitando a conformidade fiscal.
## Autores

- Ester Paiva
- Luana Nunes Carvalho
- Leilane Campos da Costa (https://github.com/leila595)

## Stack utilizada


- **Linguagens**: JavaScript, HTML, CSS  
- **Framework Backend**: Visual studio code, Laravel
- **Framework Frontend**: Visual.code  
- **Banco de Dados**: MySQL 
- **Autenticação**: JWT (JSON Web Tokens)  
- **Ferramentas Auxiliares**:  
  - Docker (para conteinerização)  
  - Git (controle de versão)  
  - Swagger (documentação da API)  

## Instalação

 

| **Etapa**          | **Comando/Ação**                          | **Descrição**                                  |
|--------------------|------------------------------------------|----------------------------------------------|
| **Clonar Repositório** | `git clone https://github.com/seu-usuario/api-gestao-contabil.git` | Baixa o código fonte do projeto. |
| **Acessar Diretório** | `cd api-gestao-contabil`                | Entra na pasta raiz do projeto. |
| **Instalar Dependências** | `npm install` ou `yarn install`       | Instala as bibliotecas necessárias. |
| **Configurar `.env`** | Criar arquivo baseado no `.env.example` | Define variáveis de ambiente (banco de dados, JWT, etc.). |
| **Executar Migrations** | `npx knex migrate:latest` ou `npx sequelize-cli db:migrate` | Cria tabelas no banco de dados. |
| **Popular Banco (Opcional)** | `npx knex seed:run`                | Insere dados iniciais para testes. |
| **Iniciar API**    | `npm run dev` (dev) ou `npm start` (prod) | Sober o servidor backend. |
| **Docker (Opcional)** | `docker-compose up -d`                | Sobe containers do PostgreSQL e da API. |


## Funcionalidades

 Gestão de Clientes

login, edição e exclusão de clientes.

Histórico de transações e documentos.

 Emissão de Documentos Fiscais

Geração automática de notas fiscais e recibos.

Integração com APIs de contabilidade (ex.: Receita WS).


 Autenticação Segura

Login com JWT e controle de permissões por cargo (admin, contador, assistente).

 Integrações

Bancos (via OFX/CSV).

Sistemas de nota fiscal eletrônica (NFe).



## Contribuindo



Este sistema de **gestão contábil** oferece:  

 **Automação de processos**  
- Elimina tarefas manuais (cadastro de clientes, emissão de documentos).  
- Reduz erros humanos em cálculos fiscais.  

**Conformidade fiscal**  
- Alertas de prazos (DAS, DIRF, SPED).  
- Integração com sistemas governamentais.  

 **Acesso centralizado**  
- Dados de clientes, relatórios e documentos em um único lugar.  
- Permissões por cargo (contador, assistente, admin). 

 **Escalabilidade**  
- Arquitetura modular (API + frontend) para futuras integrações.  
- Suporte a múltiplos escritórios.  


**Conformidade fiscal**  
- Alertas de prazos (DAS, DIRF, SPED).  
- Integração com sistemas governamentais.  

 **Acesso centralizado**  
- Dados de clientes, relatórios e documentos em um único lugar.  
- Permissões por cargo (contador, assistente, admin). 

 **Escalabilidade**  
- Arquitetura modular (API + frontend) para futuras integrações.  
- Suporte a múltiplos escritórios.  



