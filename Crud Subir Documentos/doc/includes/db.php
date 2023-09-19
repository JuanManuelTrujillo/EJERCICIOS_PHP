<?php

$host = "localhost";
$user = "root";
$password = "12345678";
$database = "files";


$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>