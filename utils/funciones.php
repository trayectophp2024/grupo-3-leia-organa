<?php

/* listar categorias por tabla  */

function listar_todo($conn, $tabla){

    //1- Realizar consulta o query
    $sqlpersonajes = "SELECT * FROM " . $tabla . ";";

    // 2- Ejecutar la consulta
    $result = $conn->query($sqlpersonajes);

    // 3- Retornar y convertir la consulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);

}

/* listar un producto */

function categoria_particular($conn, $tabla, $id){
     //1- Realizar consulta o query
     $sqlpersonajes = "SELECT * FROM " . $tabla . " WHERE id= " . $id;

     // 2- Ejecutar la consulta
     $result = $conn->query($sqlpersonajes);
 
     // 3- Retornar y convertir la consulta en un array asociativo
     return $result->fetch_all(MYSQLI_ASSOC);

}

/* funcion busqueda */

function buscar_productos($conn, $termino_busqueda){
    // escapar el termino de busqueda para evitar inyectar SQL

    $termino_busqueda = $conn->real_escape_string($termino_busqueda);

    // consultas para buscar personajes
    $sqlPersonaje = "SELECT 'personajes' as tabla, id, nombre, afiliacion, planeta_natal, habilidades, arma, actor, imagen, id_especie FROM personajes
    WHERE LOWER (nombre) LIKE '%$termino_busqueda%'
     ";

// consultas para buscar naves
$sqlNave = "SELECT 'naves' as tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves
WHERE LOWER (nombre) LIKE '%$termino_busqueda%'
 ";


// consultas para buscar en sables
$sqlSable = "SELECT 'sables' as tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen FROM sables
WHERE LOWER (nombre) LIKE '%$termino_busqueda%'
 ";



// consultas para buscar en peliculas
$sqlPelicula = "SELECT 'peliculas' as tabla, id, nombre, episodio, descripcion, director, año_extreno, duracion, imagen FROM peliculas
WHERE LOWER (nombre) LIKE '%$termino_busqueda%'
 ";



// ejecutar la consulta y convertir en un array asociativo
$resultPersonajes = $conn->query($sqlPersonaje)->fetch_all(MYSQLI_ASSOC);
$resultNaves = $conn->query($sqlNave)->fetch_all(MYSQLI_ASSOC);
$resultSables = $conn->query($sqlSable)->fetch_all(MYSQLI_ASSOC);
$resultPeliculas = $conn->query($sqlPelicula)->fetch_all(MYSQLI_ASSOC);


// combinar los resultados de las tres tablas

$resultado = array_merge($resultPersonajes, $resultNaves, $resultSables, $resultPeliculas);
return $resultado;

}


/* 
SELECT imagen FROM `personajes` 
Order By rand()
LIMIT 3
*/

/* Imagenes random */

function random_img($conn, $tabla){

    //1- Realizar consulta o query
    $sqlpersonajes = "SELECT imagen FROM " . $tabla . " ORDER BY rand() Limit 3 ";

    // 2- Ejecutar la consulta
    $result = $conn->query($sqlpersonajes);

    // 3- Retornar y convertir la consulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);

}


?>