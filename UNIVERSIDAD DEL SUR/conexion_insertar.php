<?php
include 'conexion.php';

$nombre= $_POST['nombre_estudiante'];
$edad= $_POST['edad'];
$correo= $_POST['correo_estudiante'];
$docente= $_POST['docente'];
$programa= $_POST['programa'];


$sql= "INSERT INTO estudiantes(nombre_estudiante,edad,correo_estudiante,id_docente,id_programa) VALUES('$nombre','$edad','$correo','$docente','$programa')";

$resultado = mysqli_query ($conn, $sql);

if($resultado === true ){
header("location:index.php");
}else{
echo "Datos no insertados";
}
?>