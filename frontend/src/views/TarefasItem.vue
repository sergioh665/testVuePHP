<template>
   <div class="task-item">
     <h3>{{ tarefa.titulo }}</h3>
     <p>{{ tarefa.descricao }}</p>
     <p>Status: {{ tarefa.status }}</p>
     <p>Criado em: {{ tarefa.data_criacao }}</p>
     <p>Atualizado em: {{ tarefa.data_atualizacao }}</p>
     <button @click="editarTarefa">Editar</button>
     <button @click="apagarTarefa">Excluir</button>
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
    editarTarefa() {
      this.$emit('editar', this.tarefa.id);
    },
    apagarTarefa() {
      this.$emit('apagar', this.tarefa.id);
    }
  }
});
</script>