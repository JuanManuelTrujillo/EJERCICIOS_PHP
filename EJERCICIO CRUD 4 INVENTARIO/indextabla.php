<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center" style= "background-color:black;color:white" >LISTA DE PRODUCTOS</h1>
    <hr>
    </div>
    <div class="container">
    <table class="table">
    <div class="container">
<a href="indexagregar.php" class="btn btn-success">agregar</a>
</div>
  <thead>
                <tr>
                    <th scope="col">Id_productos</th>
                    <th scope="col">Id_categorias</th>
                    <th scope="col">Id_marcas</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                   </tr>
            </thead>
            <tbody>
            <?php
    require 'conexion.php';

    $sql= ("SELECT *FROM productos");
    $resultado= $conn->query($sql);
    ?>
    <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td scope="row"><?php  echo $fila['id_productos']?></td>
                    <td scope="row"><?php  echo $fila['id_categorias']?></td>
                    <td scope="row"><?php  echo $fila['id_marcas']?></td>
                    <td scope="row"><?php  echo $fila['precio']?></td>
                    <td scope="row"><?php  echo $fila['descripcion']?></td>

                    <th>
      <a href=""class="btn btn-warning">editar </a>
      <a href=""class="btn btn-success">eliminar</a>
    </th>
                    </td>
                </tr>
                    <?php } ?>
                    </tbody>
                    </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 

</body>
</html>