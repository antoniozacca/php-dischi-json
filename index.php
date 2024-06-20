<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.jsdelivr.net/npm/axios@1.6.1/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-header">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Spotify_logo_with_text.svg">
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div id="app" class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <div v-for="todo in todos" :key="todo.title" class="col">
        <div class="card h-100">
          <img :src="todo.img" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{ todo.title }}</h5>
            <p class="card-text">{{ todo.artist }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ todo.year }}</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>