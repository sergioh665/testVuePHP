<template>
   <div class="task-item">
     <h3>{{ tarefa.titulo }}</h3>
     <p>{{ tarefa.descricao }}</p>
     <p>Status: {{ tarefa.status }}</p>
     <p>Criado em: {{ tarefa.data_criacao }}</p>
     <p>Atualizado em: {{ tarefa.data_atualizacao }}</p>
     <button @click="editTask">Editar</button>
     <button @click="deleteTask">Excluir</button>
   </div>
 </template>

<script lang="ts">

import { defineComponent } from 'vue';

export default defineComponent({
  name: 'TarefasItem',
  props: [
   "tarefa",
  ],
  methods: {
    editTask() {
      this.$emit('edit', this.tarefa.id);
    },
    deleteTask() {
      this.$emit('delete', this.tarefa.id);
    }
  }
});
</script>