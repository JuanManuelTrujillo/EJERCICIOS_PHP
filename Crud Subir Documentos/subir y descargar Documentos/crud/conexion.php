<?php

$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "subir_documentos";

$conexion = mysqli_connect($servername, $username, $password, $dbname);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;
}
?>