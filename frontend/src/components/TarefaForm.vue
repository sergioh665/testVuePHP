<template>
  <form @submit.prevent="criarTarefa">
    <input v-model="titulo" placeholder="Título" required />
    <textarea v-model="descricao" placeholder="Descrição" required></textarea>
    <button type="submit">Criar Tarefa</button>
  </form>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      titulo: '',
      descricao: '',
    };
  },
  methods: {
    criarTarefa() {
      axios.post('http://localhost:8080/tarefas', {
        titulo: this.titulo,
        descricao: this.descricao,
        status: 'pendente',
      }).then(() => {
        this.$emit('tarefaCriada');
        this.titulo = '';
        this.descricao = '';
      });
    },
  },
};
</script>