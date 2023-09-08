<?php

include 'conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo_estudiante'];
    $programa = $_POST['programa'];
    $docente = $_POST['docente'];

    $sql = "UPDATE estudiantes SET 
                    nombre_estudiante='".$nombre."',
                    edad='".$edad."',
                    correo_estudiante='".$correo."',
                    id_programa='".$programa."' 
                    WHERE id_programa =".$id."";
                   

    if ($resultado = $conn->query($sql)) {
        header("location:index.php");
    }
