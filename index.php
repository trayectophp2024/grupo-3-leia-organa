<?php
require_once "utils/db_conenection.php"

?>


<?php require "partials/header.php" ?>

<main class="mb-0">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img height="400px" src="img/ca2.webp" class="d-block w-100 " alt="sw">
            </div>
            <div class="carousel-item">
                <img height="350px" src="img/ca1.png" class="d-block w-100" alt="per">
            </div>
            <div class="carousel-item">
                <img height="350px" src="img/ca3.jpg" class="d-block w-100" alt="nav">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</main>



<div class="p-5  index-caja">

    <!-- CARD 1 -->
    <div class="row p-3 mb-5 bg-white d-flex align-items-center justify-content-center">

        <div class="col-4">
            <img width="300px" class="d-block mx-auto img-fluid" src="img/Star Wars personajes.jpg" alt="home">
        </div>

        <div class="col-8">

            <p>
                <b class=" titulo fs-3">PERSONAJES</b>

                Star Wars, conocida también en español como La guerra de las galaxias. Su trama describe las vivencias de un grupo de personajes que habitan en una galaxia ficticia e interactúan con elementos como «la Fuerza», un campo de energía metafísico y omnipresente que posee un «lado luminoso» impulsado por la sabiduría, la nobleza y la justicia y utilizado por los Jedi, y un «lado oscuro» usado por los Sith y provocado por la ira, el miedo, el odio y la desesperación.
                <a class="btn boton-caja " href="">Ver más</a>
            </p>
        </div>



    </div>

    <!-- CARD 2 -->
    <div class="row p-3 mb-5 bg-white d-flex align-items-center justify-content-center">


        <div class="col-8">

            <p>
                <b class=" titulo fs-3">NAVES</b>

                Las naves son vehículos tripulado utilizado para viajar en el espacio real. Datando de miles de años atras, las primeras naves estelares transportaban espaciadores a mundos nuevos a través de procesos de congelación criogénica.
                <a class="btn boton-caja " href="">Ver más</a>
            </p>
        </div>

        <div class="col-4">
            <img width="300px" class="d-block mx-auto img-fluid" src="img/star wars naves.jpg" alt="home">
        </div>


    </div>



    <!-- CARD 3 -->
    <div class="row p-3 mb-5 bg-white d-flex align-items-center justify-content-center">

        <div class="col-4">
            <img width="300px" class="d-block mx-auto img-fluid" src="img/star wars sables.jpg" alt="home">
        </div>

        <div class="col-8">

            <p>
                <b class=" titulo fs-3">SABLES</b>

                Los Sables de luz, a veces denominado como espada láser, era un arma utilizada por los Jedi, los Sith y otros sensibles a la Fuerza. Los sables de luz consisten en una hoja de plasma, impulsada por un cristal kyber, que se emite desde una empuñadura usualmente metálica y se podía cerrar a voluntad. Es un arma que requiere habilidad y entrenamiento, y se mejora mucho cuando se usa junto con la Fuerza.
                <a class="btn boton-caja " href="">Ver más</a>
            </p>
        </div>



    </div>

    <!-- CARD 4 -->
    <div class="row p-3 mb-5 bg-white d-flex align-items-center justify-content-center">


        <div class="col-8">

            <p>
                <b class=" titulo fs-3">PELICULAS</b>

                Star Wars, es una franquicia y universo compartido de fantasía compuesta primordialmente de una serie de películas concebidas por el cineasta estadounidense George Lucas en la década de 1970, y producidas y distribuidas inicialmente por 20th Century Fox y posteriormente por The Walt Disney Company a partir de 2012..
                <a class="btn boton-caja " href="">Ver más</a>
            </p>
        </div>

        <div class="col-4">
            <img width="300px" class="d-block mx-auto img-fluid" src="img/star wars peliculas.jpg" alt="home">
        </div>


    </div>



</div>



<?php require "partials/footer.php" ?>