<?php
include 'conexion.php';

$id_categorias= $_POST['id_categorias'];
$id_marcas= $_POST['id_marcas'];
$precio= $_POST['precio'];
$descripcion= $_POST['descripcion'];

$sql= "INSERT INTO productos(id_categorias,id_marcas,precio,descripcion)
values ('$id_categorias','$id_marcas','$precio','$descripcion')";

$resultado = mysqli_query ($conn, $sql);

if($resultado === true ){
header("location:indextabla.php");
}else{
echo "datos no insertados";
}
?>