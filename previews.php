<?php
require_once "utils/funciones.php";
require_once "utils/db_conenection.php";

/* capturamos la tabla que viene por GET (URL) */


$tabla = $_GET['categoria'] ?? false;

/* tablas validas */
$tablas = [
    'personajes' => 'personaje',
    'naves' => 'nave',
    'sables' => 'sable',
    'peliculas' => 'pelicula'
];


/* comprobar si el array exite */
if (!array_key_exists($tabla, $tablas)) {

   header('Location: error404.php');
}




//llamar a la funcion

$categorias = listar_todo($conn, $tabla);

/* echo "<pre>";
var_dump($categorias);
echo "</pre>"; */


?>

<?php require "partials/header.php" ?>

<main >

<h1 class="titulo text-center">Guia de  </h1>

<div class="linea"></div>

<h2 class="titulo text-center mt-3"> Resultado de la busqueda </h2>


<div class="container">


    <div class="row caja " >
        

        <?php foreach ($categorias as $producto) { ?>
            <div class="col-4 mt-4 mb-4 "  >
                <div class="card" style="width: 18rem">
                    <img height="400px" src="img/<?= $producto['imagen']; ?>" class="card-imag-top" alt="">

                    <div class="card-body" style="height: 200px;">
                        <h5 class="card-tittle"><?= $producto['nombre']; ?></h5>
                        <h5 class="card-tittle text-success"><?= mb_substr($producto['descripcion'],0, 40) ?>...</h5>
                        <a href="<?= $tabla ?>.php?categorias=<?= $tabla ?>&id=<?= $producto['id'] ?>" class="btn btn-warning d-block mx-auto py-2 w-50">Ingresar</a>

                    </div>

                </div>


            </div>

        <?php  }  ?>

    </div>

    </div>

</main>




<?php require "partials/footer.php" ?>