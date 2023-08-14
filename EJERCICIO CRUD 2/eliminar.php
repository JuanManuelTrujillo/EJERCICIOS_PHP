<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloeliminar.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="eliminar.php">
      <h2>Eliminar Datos </h2>
    <div class="container">
    <label for="id">id:</label>
        <input type="text" name="id" id="id" required>
        </div>
        <button type="submit">Eliminar Registro</button>
     <button><a href="index.php">Regresar</a></button>

<?php
// Verificar si se ha enviado el formulario
require 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];


    // Consulta para eliminar un registro
    $sql = "DELETE FROM sesion WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}
?>
</body>
</html>