<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biblioteca Star Wars</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- favicon -->
  <link rel="shortcut icon" href="img/fav2.jpg" type="favicon">
  <!-- Boostrap css -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="css/estilos.css">

  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body class="bg-secondary">

  <header>
    <div class="header-superior">

      <nav class="navbar  px-5" style="background-color: #211516;">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand">BIBLIOTECA STAR WARS</a>
          <form action="busqueda.php" class="d-flex" role="search">
            <input class="form-control " name="q" type="search" placeholder="Buscar en la pagina" aria-label="Search">
            <button class="btn btn-light px-3 " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </nav>
    </div>

    <div class="header-inferior">

      <nav class="navbar PX-5 navbar-expand-lg" style="background-color: #000;">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="previews.php?categoria=personajes">PERSONAJES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="previews.php?categoria=naves">NAVES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="previews.php?categoria=sables">SABLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="previews.php?categoria=peliculas">PELICULAS</a>
              </li>
            </ul>
            <a  href="creditos.php" class="nav-link">
              CREDITOS
            </a >
          </div>
        </div>
      </nav>


    </div>
  </header>