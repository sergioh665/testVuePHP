# Teste Técnico para Estágio - Desenvolvimento Web

### Objetivo: Avaliar conhecimentos básicos em PHP (backend) e Vue.js (frontend).

## Tempo de Realização:

- Tempo total: 4 horas
- Recomenda-se o uso de frameworks como Codeigniter 4 (PHP) e Vue.js

## Descrição do Projeto: Sistema de Gerenciamento de Tarefas

**Requisitos Técnicos:**

1. Backend (PHP)
2. Frontend (Vue.js)
3. Banco de Dados MySQL

## Funcionalidades Requeridas:

**Backend (PHP)**

- Criar uma API RESTful para gerenciamento de tarefas
- Endpoints necessários:
  - GET /tarefas - Listar todas as tarefas
  - POST /tarefas - Criar nova tarefa
  - PUT /tarefas/{id} - Atualizar tarefa
  - DELETE /tarefas/{id} - Excluir tarefa

**Frontend (Vue.js)**

- Criar interface para gerenciamento de tarefas
- Componentes necessários:
  - Listagem de tarefas
  - Formulário de criação de tarefa
  - Botões de edição e exclusão

**Modelo de Dados (Tarefa):**

```json
{
  "id": "inteiro",
  "titulo": "string",
  "descricao": "string",
  "status": "string (pendente, em progresso, concluída)",
  "data_criacao": "datetime",
  "data_atualizacao": "datetime"
}
```

## Critérios de Avaliação

**PHP (Backend)**

- Estruturação correta do código
- Validação de dados
- Tratamento de erros
- Utilização de migrations/seeders
- Modelagem de banco de dados

**Vue.js (Frontend)**

- Componentização
- Gerenciamento de estado (Vuex ou Pinia)
- Responsividade
- Integração com API
- Tratamento de erros na interface

**Requisitos Adicionais**

- Código limpo e organizado
- Comentários explicativos
- Boas práticas de desenvolvimento
- Tratamento de erros e exceções

**Diferenciais**

- Utilização de TypeScript
- Implementação de autenticação
- Testes unitários
- Design responsivo e agradável
- Utilização de migrations/seeders (PHP)
