<?php
include('conexion.php');

$stmt = $pdo->query("SELECT id, nombre FROM archivos");
$archivos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>CRUD de Archivos</title>
</head>
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>
<body>
<div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">CRUD de Archivos</h1>
    </div>
    <div class="container">
            <a href="subir_archivo.php" class="btn btn-success">Subir Archivo</a>
    </div>
    <br>
    <div class="container">
    <table class="table table-bordered"> 
    <thead class="table-dark">
    <tr>
        <th scope="col">Nombre Documento</th>
        <th scope="col">Acciones</th>          
    </tr>
    </thead>
    </table>
    <tbody>
    <ul>
        <?php foreach ($archivos as $archivo): ?>
            <br>
            <li>
                <a href="descargar_archivo.php?id=<?php echo $archivo['id']; ?>">
                    <?php echo $archivo['nombre']; ?>
                </a>
                <a href="eliminar_archivo.php?delete=<?php echo $archivo['id']; ?>" class="btn btn-warning" onclick="return confirmacion()">Eliminar</a>
                <a href="ver_documento.php?Id=<?php echo $archivo['id']; ?>" class="btn btn-warning">Ver</a>
                   
            </li>
        <?php endforeach; ?>
    </ul>
    </tbody>
    </div>
</body>
</html>

