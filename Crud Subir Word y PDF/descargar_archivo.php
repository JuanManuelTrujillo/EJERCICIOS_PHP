<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT nombre, tipo, contenido FROM archivos WHERE id = ?");
    $stmt->execute([$id]);
    $archivo = $stmt->fetch();

    if ($archivo) {
        header('Content-Type: ' . $archivo['tipo']);
        header('Content-Disposition: attachment; filename="' . $archivo['nombre'] . '"');
        echo $archivo['contenido'];
        exit;
    } else {
        echo "Archivo no encontrado.";
    }
}
?>