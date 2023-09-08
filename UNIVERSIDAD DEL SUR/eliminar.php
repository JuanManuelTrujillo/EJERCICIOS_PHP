<?php
    include ("conexion.php");

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM estudiantes WHERE id ='$id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:index.php");
    }

?>