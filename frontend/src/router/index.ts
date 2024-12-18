import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';


// Definição de rotas
const routes: Array<RouteRecordRaw> = [
  { 
    path: '/',
    name: 'TarefasList',
    component: () => import("@/views/Tarefas.vue"),
     // Componente para a página inicial
  },
  { 
    path: '/tarefas',
    name: 'Tarefas',
    component: () => import("@/views/Tarefas.vue"),
     // Componente para a página inicial
  }
];

// Criação do roteador
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;