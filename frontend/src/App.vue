<template>
  <div id="app">
    <TarefaList />
  </div>
</template>

<script>
import TarefaList from './components/TarefaList.vue';

export default {
  components: { TarefaList },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
