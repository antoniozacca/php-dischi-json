const { createApp } = Vue;
createApp({
    data(){
        return{
            urlTodos: 'http://localhost/php-dischi-json/server.php'
        }
    },
    methods: {
        
        getTodos(){
            axios.get(this.urlTodos).then((response) => console.log(response))
        },
    },
    created(){
        this.getTodos()
    }
}).mount('#app')