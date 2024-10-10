<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "star wars";

$conn = new mysqli($host,$user,$password,$database);
$conn->set_charset("utf8mb4");


//verificamos la conexion


if ($conn->connect_error) {
    die("Conexion fallida:" . $conn->connect_error);
}/* else {
    echo "Conexion exitosa con la base de datos";
}
 */



 /* a $conn la cambie por $cnc  */


?>