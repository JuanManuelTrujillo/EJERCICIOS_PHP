<?php
include('conexion.php');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM archivos WHERE id = ?");
    if ($stmt->execute([$id])) {
        header('Location: index.php');
    } else {
        echo "Error al eliminar el archivo.";
    }
}
?>
