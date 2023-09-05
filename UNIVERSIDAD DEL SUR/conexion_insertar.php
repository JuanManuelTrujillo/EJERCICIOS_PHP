<?php
include 'conexion.php';

$programa= $_POST['programa'];
$docente= $_POST['docente'];
$nombre= $_POST['nombre'];
$edad= $_POST['edad'];
$correo= $_POST['correo'];

$sql= "INSERT INTO estudiantes(nombre_estudiante,edad,correo_estudiante)
values ('$nombre','$edad','$correo')";

$resultado = mysqli_query ($conn, $sql);

if($resultado === true ){
header("location:index.php");
}else{
echo "datos no insertados";
}
?>