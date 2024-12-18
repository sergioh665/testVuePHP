# [Teste Técnico para Estágio - Desenvolvimento Web](https://github.com/sergioh665/testVuePHP/blob/main/Desafio.md)

## Descrição

Este projeto é um sistema de **gerenciamento de tarefas**. Ele foi desenvolvido em PHP, Vue.js e utiliza o MySQL como banco de dados.

## Funcionalidades

- Cadastro de nova Tarefa com descrição.
- Listagem de Tarefas.
- Edição e exclusão de tarefas quando necessário.

## Requisitos

- **PHP** 7.4 ou superior ([baixar](https://www.php.net/downloads.php))
- **MySQL** 5.7 ou superior ([baixar](https://www.mysql.com/downloads/))
- **Composer** para gerenciar dependências ([baixar](https://getcomposer.org/download/))
- **XAMPP** ([baixar](https://www.apachefriends.org/index.html))
  > Opcional, para um ambiente de desenvolvimento rápido
- **Vue jS** ([baixar](https://br.vuejs.org/v2/guide/installation.html))

## Instalação

### Passo 1: Clonar o Repositório

```sh
git clone https://github.com/sergioh665/testVuePHP.git
cd testVuePHP
```

### Passo 2: Navegar para o diretório `backend`

```sh
cd backend
```

### Passo 3: Instalar dependências

```
composer install
```

### Passo 4: Popular banco de dados com tabelas

```
php spark migrate
```

### Passo 5: Iniciar servidor PHP

```
php spark serve
```

### Passo 6: Navegar para o diretório `frontend`

```sh
cd..
cd frontend
```

### Passo 7: Instalar dependências com npm

```
npm install
```

### Passo 7: Iniciar servidor Vue

```
npm run dev
```

> Abra o navegador e vá para http://localhost:8000.
>
> Para ter acesso ao Banco de Dados vá para http://localhost/phpmyadmin

## Autor

Sérgio Henrique - sergioh665@gmail.com

---
