<head>
  <title>Taca</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" type="image/png" href="images/favicon.jpg">
</head>
<body style="background-color: #f1e1ff;">
  <nav class="navbar navbar-light mb-4" style="background-color: #d3a4ff;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php/">Catálogo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="form.php">Añadir producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php/?q=helado">Helados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php/?q=paleta">Paletas</a>
          </li>
          <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" href="index.php/?q=bebida">Bebidas</a>
          </li>
          </li>
        </ul>
        <form class="d-flex" action="index.php">
          <input class="form-control me-2" type="search" name="q" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
  </div>
</nav>