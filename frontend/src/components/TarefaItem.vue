<template>
   <div>
     <h3>{{ tarefa.titulo }}</h3>
     <p>{{ tarefa.descricao }}</p>
     <p>Status: {{ tarefa.status }}</p>
     <button @click="excluirTarefa">Excluir</button>
     <button @click="atualizarTarefa">Atualizar</button>
   </div>
 </template>
 
 <script>
 import axios from 'axios';
 
 export default {
   props: ['tarefa'],
   methods: {
     excluirTarefa() {
       axios.delete(`http://localhost:8080/tarefas/${this.tarefa.id}`).then(() => {
         this.$emit('tarefaExcluida');
       });
     },
     atualizarTarefa() {
       axios.put(`http://localhost:8080/tarefas/${this.tarefa.id}`, {
         ...this.tarefa,
         status: 'concluída',
       }).then(() => {
         this.$emit('tarefaAtualizada');
       });
     },
   },
 };
 </script>