<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $contenido = file_get_contents($_FILES['archivo']['tmp_name']);

    $stmt = $pdo->prepare("INSERT INTO archivos (nombre, tipo, contenido) VALUES (?, ?, ?)");
    if ($stmt->execute([$nombre, $tipo, $contenido])) {
        header('Location: index.php');
    } else {
        echo "Error al subir el archivo.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <h1 class="bg-black p-2 text-white text-center">Subir Archivo</h1>
</head>
<body>
    <div class="container">
    <h1>Subir Archivo</h1>
    <form action="subir_archivo.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" accept=".pdf, .doc, .docx, .png, .jpeg">
        <button type="submit" class="btn btn-success">Subir</button>
    </form>
    <br>
    <a href="index.php" class="btn btn-danger">Volver a la lista de archivos</a>
    </div>
</body>
</html>