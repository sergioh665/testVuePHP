<template>
   <div>
     <h2>Lista de Tarefas</h2>
     <ul>
       <li v-for="tarefa in tarefas" :key="tarefa.id">
         <TarefasItem :tarefa="tarefa" />
       </li>
     </ul>
   </div>
 </template>
 
 <script lang="ts">

 import { defineComponent, ref, onMounted } from 'vue';
 import api from '../services/apiService';
 import TarefasItem from './TarefasItem.vue';
 
 export default defineComponent({
   name: 'TarefasList',
   components: {
      TarefasItem
   },
   onMounted() {
     this.fetchData(); // Faz a chamada ao carregar o componente
   },
   methods: {
     async fetchData() {
         console.log("oi");       
     },
   },
   setup(){
      const fetchData = async() => {
         try {
         const response = await api.get('/tarefas');
         tarefas.value = response.data; // Armazena os dados retornados pela API
       } catch (error) {
         console.error('Erro ao buscar dados:', error);
       }
      }
      const tarefas = ref([]); 
         onMounted (()=>{
            fetchData();
         }) 
      return { fetchData, tarefas }
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