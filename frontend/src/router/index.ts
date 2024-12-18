import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';

// Definição de rotas
const routes: Array<RouteRecordRaw> = [
  { 
    path: '/', //vai listar as tarefas
    name: 'TarefasLista',
    component: () => import("../views/Tarefas.vue"),
  },
  { 
    path: '/tarefas/nova', //criar/editar nova tarefa
    name: 'TarefasForm',
    component: () => import("../views/TarefasForm.vue"),
  },
  { 
    path: '/tarefas/:id/editar', //criar/editar nova tarefa
    name: 'TarefasEdit',
    component: () => import("../views/TarefasForm.vue"),
    props: true
  }
];

// Criação do roteador
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;