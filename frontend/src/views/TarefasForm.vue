<template>
  <div class="task-form">
    <h2>{{ isEdit ? 'Editar Tarefa' : 'Criar Tarefa' }}</h2>
    <form @submit.prevent="handleSubmit">
      <div>
        <label for="titulo">Título</label>
        <input id="titulo" v-model="tarefa.titulo" required />
      </div>
      <div>
        <label for="descricao">Descrição</label>
        <textarea id="descricao" v-model="tarefa.descricao" required></textarea>
      </div>
      <div>
        <label for="status">Status</label>
        <select id="status" v-model="tarefa.status" required>
          <option value="pendente">Pendente</option>
          <option value="em progresso">Em Progresso</option>
          <option value="concluída">Concluída</option>
        </select>
      </div>
      <button type="submit">{{ isEdit ? 'Salvar' : 'Criar' }}</button>
    </form>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from 'vue';
import api from '../services/apiService';

export default defineComponent({
  name: 'TarefasForm',
  props: {
    tarefaId: {
      type: Number,
      required: false
    }
  },
  setup(props) {
    const tarefa = ref({ titulo: '', descricao: '', status: 'pendente' });
    const isEdit = ref(false);

    const fetchTarefa = async () => {
      if (props.tarefaId) {
        isEdit.value = true;
        try {
          const response = await api.get(`/tarefas/${props.tarefaId}`);
          tarefa.value = response.data;
        } catch (error) {
          console.error('Erro ao buscar tarefa:', error);
        }
      }
    };

    const handleSubmit = async () => {
      try {
        if (isEdit.value) {
          await api.put(`/tarefas/${props.tarefaId}`, tarefa.value);
        } else {
          await api.post('/tarefas', tarefa.value);
        }
      } catch (error) {
        console.error('Erro ao salvar tarefa:', error);
      }
    };

    onMounted(() => {
      fetchTarefa();
    });

    return {
      tarefa,
      isEdit,
      handleSubmit
    };
  }
});
</script>

<style scoped>
.task-form {
  max-width: 400px;
  margin: auto;
}
.task-form form {
  display: flex;
  flex-direction: column;
}
.task-form div {
  margin-bottom: 1em;
}
</style>