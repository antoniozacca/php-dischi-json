const { createApp } = Vue;

createApp({
  data() {
    return {
      urlTodos: 'http://localhost/php-dischi-json/server.php',
      todos: [] 
    };
  },
  methods: {
    getTodos() {
      axios.get(this.urlTodos).then((response) => {this.todos = response.data})
    }
  },
  created() {
    this.getTodos();
  }
}).mount('#app');