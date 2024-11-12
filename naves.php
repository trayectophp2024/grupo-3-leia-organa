<?php

require_once "utils/funciones.php";
require_once "utils/db_conenection.php";

$tabla = $_GET['categorias'] ?? FALSE;
$id = $_GET['id'] ?? FALSE;

$productos = categoria_particular($conn, $tabla, $id);
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



<?php foreach($productos as $producto) {  ?>

<div class="card mb-3 mx-auto mt-5" style="max-width: 740px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img src="img/<?= $producto['imagen'] ?>" class="i img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title"><?= $producto['nombre'] ?></h5>
        <p class="card-text"><?= $producto['descripcion'] ?></p>
        <p class="card-text"><b>Tipo:</b> <?= $producto['tipo'] ?></p>
        <p class="card-text"><b>Fabricante:</b> <?= $producto['fabricante'] ?></p>
        <p class="card-text"><b>Longitud:</b> <?= $producto['longitud'] ?> metros</p>
        <p class="card-text"><b>Velocidad Maxima:</b> <?= $producto['velocidad_maxima'] ?> km/h</p>
        <p class="card-text"><b>Armamento:</b> <?= $producto['armamento'] ?></p>
        <p class="card-text"><b>Capacidad:</b> <?= $producto['capacidad'] ?> personas</p>
        <a href="previews.php?categoria=naves" class="btn btn-warning">Regresar a Naves</a>
        
      </div>
    </div>
  </div>
</div>

<?php } ?>

</main>

 <?php require "partials/footer.php" ?>