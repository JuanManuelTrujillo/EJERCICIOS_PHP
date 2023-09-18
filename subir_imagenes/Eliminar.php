<?php
    include 'Backend/conexion.php';

    $cod_imagen  = $_REQUEST['cod_imagen '];
    $sql = "DELETE FROM imagenes WHERE cod_imagen ='$cod_imagen '";

    $resultado = mysqli_query($conn,$query);
    if ($resultado === TRUE) {
        header('location:index.php');
    }

?>