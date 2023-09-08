<?php

    include_once("../Config/Conexion.php");

    $id = $_POST['Id'];
    $Categoria = $_POST['Categorias'];
    $Marcas = $_POST['Marcas'];
    $Precio = $_POST['Precio'];
    $Descripcion = $_POST['Descripcion'];
   

    $sql = "UPDATE productos SET 
                    CategoriaId='".$Categoria."',
                    MarcaId='".$Marcas."',
                    Precio='".$Precio."',
                    DescripcionProducto='".$Descripcion."'
                     WHERE IdProducto =".$id."";

    if ($resultado = $conn->query($sql)) {
        header("location:../Index.php");
    }
