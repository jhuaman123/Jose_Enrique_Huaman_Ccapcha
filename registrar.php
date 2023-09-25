<?php 
$host ="localhost";
$usuario ="root";
$contraseña="";
$bd ="entregable";

$conexion = new mysqli($host,$usuario,$contraseña,$bd);

if ($conexion->connect_error) {
    die("La conexión a la base de datos falló".$conexion->connect_error);
}else{
    echo "La conexión fue exitosa";
}

?>