<?php

require_once "utils/funciones.php";
require_once "utils/db_conenection.php";

$tabla = $_GET['categorias'] ?? FALSE;
$id = $_GET['id'] ?? FALSE;

$productos = categoria_particular($conn, $tabla, $id);

$random = random_img($conn, $tabla);
/* 
echo "<pre>";
var_dump($productos);
echo "</pre>";
 */


/* obtener nombre del producto */

$producto = $productos[0] ?? NULL;

?>


<?php require "partials/header.php" ?>

<main class="container">



  <?php foreach ($productos as $producto) {  ?>

    <div class="card mb-3 mx-auto mt-5" style="max-width: 740px;">
      <div class="row g-0">
        <div class="col-md-6">
          <img src="img/<?= $producto['imagen'] ?>" class="i img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title"><?= $producto['nombre'] ?></h5>
            <p class="card-text"><?= $producto['descripcion'] ?></p>
            <p class="card-text"><b>Afiliacion:</b> <?= $producto['afiliacion'] ?></p>
            <p class="card-text"><b>Planeta Natal:</b> <?= $producto['planeta_natal'] ?></p>
            <p class="card-text"><b>Habilidades:</b> <?= $producto['habilidades'] ?></p>
            <p class="card-text"><b>Arma:</b> <?= $producto['arma'] ?></p>
            <p class="card-text"><b>Actor:</b> <?= $producto['actor'] ?></p>
            <a href="previews.php?categoria=personajes" class="btn btn-warning">Regresar a Personajes</a>

          </div>
        </div>
      </div>
    </div>

  <?php } ?>


  <div class="row ">

  <h2 class="text-center">Personajes Interesantes</h2>
 

  <?php foreach ($random as $imagen) {  ?>


    <div class="col-3 mx-auto">


      <div class="card mb-3 mt-5">
        <img height="300px" src="img/<?= $imagen['imagen'] ?>" class="i rounded-start d-block" alt="...">

      </div>

    </div>

  <?php } ?>

  </div>


</main>

<?php require "partials/footer.php" ?>