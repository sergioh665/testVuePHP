<template>
  <div>
    <TarefaForm @tarefaCriada="fetchTarefas" />
    <TarefaItem v-for="tarefa in tarefas" :key="tarefa.id" :tarefa="tarefa" @tarefaAtualizada="fetchTarefas" @tarefaExcluida="fetchTarefas" />
  </div>
</template>

<script>
import TarefaForm from './TarefaForm.vue';
import TarefaItem from './TarefaItem.vue';
import axios from 'axios';

export default {
  components: { TarefaForm, TarefaItem },
  data() {
    return {
      tarefas: [],
    };
  },
  methods: {
    fetchTarefas() {
      axios.get('http://localhost:8080/tarefas').then(response => {
        this.tarefas = response.data;
      }).catch(error => {
        console.error("Houve um erro ao buscar as tarefas:", error);
      });
    },
  },
  mounted() {
    this.fetchTarefas();
  },
};
</script>