<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ver Documento</title>
</head>
<body>
    <h1 class="bg-black p-2 text-white text-center">Ver Documento</h1>
    <div class="container">

    <?php
    include('conexion.php');

    if (isset($_GET['Id'])) {
        $id = $_GET['Id'];

        $stmt = $pdo->prepare("SELECT nombre, tipo, contenido FROM archivos WHERE id = ?");
        $stmt->execute([$id]);
        $archivo = $stmt->fetch();

        if ($archivo) {
            echo '<h2>' . $archivo['nombre'] . '</h2>';
            echo '<p>Tipo: ' . $archivo['tipo'] . '</p>';
            
            if (strpos($archivo['tipo'], 'pdf') !== false) {
                echo '<embed src="data:application/pdf;base64,' . base64_encode($archivo['contenido']) . '" width="1000" height="600" />';
            } elseif (strpos($archivo['tipo'], 'word') !== false) {
                echo '<iframe src="data:application/msword;base64,' . base64_encode($archivo['contenido']) . '" width="800" height="600"></iframe>';
            } 
            // Verificar si es una imagen (JPEG, PNG, GIF)
            elseif (strpos($archivo['tipo'], 'image') !== false) {
                echo '<img src="data:' . $archivo['tipo'] . ';base64,' . base64_encode($archivo['contenido']) . '" />';
            }
            else {
                echo '<p>Este tipo de archivo no se puede mostrar en línea.</p>';
            }
        } else {
            echo "Archivo no encontrado.";
        }
    }
    ?>
    <br>
    <br>
    <a href="index.php" class="btn btn-danger">Volver a la lista de archivos</a>
    </div>
</body>
</html>
