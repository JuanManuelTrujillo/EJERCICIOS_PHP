<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR WORD & PDF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/32c9ac96a1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
    <br>
    <div class="container">
        <div class="col-sm-12">
            <h2 style="text-align: center;">Subir Archivos PDF y DOCS</h2>
            <br>
            <div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar"> Agregar </button>
            </div>
            <br>
            <br>
            <br>
            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Descripcion</th>
                            <th>Archivo</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       require_once "crud/conexion.php";
                       $consulta = mysqli_query($conexion, "SELECT * FROM documento");
                       while ($fila = mysqli_fetch_assoc($consulta)):

                       ?>
                            <tr>
                            <td><?php echo $fila['id'] ;?></td>
                            <td><?php echo $fila['nombre'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['archivo'] ;?></td>
                                <td>
                                    <a href="crud/descargar.php?id= <?php echo $fila['id'] ;?>"><i class="fas fa-download"></i></a>
                                    <a href="crud/eliminar.php?id= <?php echo $fila['id'] ;?>"><i class="fa-solid fa-trash" onclick="return confirmacion()"></i></a>
                                </td>
                                <?php endwhile ;?>

                            </tr>
                    </tbody>
                </table>

            </div>
        </div>

</body>
<style>
    a {
        text-decoration: none;
    }

    .s {
        padding-top: 50px;
        text-align: center;
    }

    i {
        padding: 5px 10px;
        font-size: 20px;
    }
</style>
<footer>
    <p class="s">REALIZADO POR <a href="">JUAN MANUEL TRUJILLO</a></p>
</footer>
<?php include "crud/agregar.php"; ?>
</html>