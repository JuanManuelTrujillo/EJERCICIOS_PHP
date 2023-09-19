<?php
    include 'Backend/conexion.php';

    $cod_imagen = $_GET['imagen'];
    $sql = "DELETE FROM imagenes WHERE cod_imagen ='$cod_imagen'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location:index.php");
    }
?>