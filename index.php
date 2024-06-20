<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/axios@1.6.1/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
  <div id="app">
    <div v-for="todo in todos" :key="todo.title">
      <img :src="todo.img" >
      <div class="card-body">
        <h2 class="card-title">{{ todo.title }}</h2>
        <p class="card-text">{{ todo.artist }}</p>
        <p class="card-text">{{ todo.year }}</p>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>