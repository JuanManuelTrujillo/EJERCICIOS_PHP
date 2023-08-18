<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>CRUD TABLAS RELACIONALES</title>
</head>
<body>
<div class="container">
    <h1 class="text-center" style= "background-color:black;color:white" >LISTADO DE ALUMNOS</h1>
    <hr>
    </div>
    <div class="container">
    <table class="table">
    <div class="container">
<a href="" class="btn btn-success">agregar</a>
</div>
  <thead>
                <tr>
                    <th scope="col">Codigo_Alumno</th>
                    <th scope="col">Nombre_Alumno</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Codigo_Inscripcion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Codigo_Alumno</th>
                    <th scope="col">Codigo_Carrera</th>
                    <th scope="col">Codigo_Carrera</th>
                    <th scope="col">Nombre_Carrera</th>
                    <th scope="col">Fecha</th>
                   </tr>
            </thead>
            <tbody>
            <?php
    require 'conexion.php';

    $sql= ("SELECT *FROM inscripcion 
    INNER JOIN alumnos on alumnos.codigo_alumno=inscripcion.codigo_alumno 
    INNER JOIN carrera on carrera.codigo_carrera=inscripcion.codigo_carrera;");
    $resultado= $conn->query($sql);
    ?>
    <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td scope="row"><?php  echo $fila['codigo_alumno']?></td>
                    <td scope="row"><?php  echo $fila['nombre_alumno']?></td>
                    <td scope="row"><?php  echo $fila['apellido']?></td>
                    <td scope="row"><?php  echo $fila['edad']?></td>
                    <td scope="row"><?php  echo $fila['telefono']?></td>

                    <td scope="row"><?php  echo $fila['codigo_inscripcion']?></td>
                    <td scope="row"><?php  echo $fila['fecha']?></td>
                    <td scope="row"><?php  echo $fila['codigo_alumno']?></td>
                    <td scope="row"><?php  echo $fila['codigo_carrera']?></td>
                    <td scope="row"><?php  echo $fila['codigo_carrera']?></td>
                    <td scope="row"><?php  echo $fila['nombre']?></td>
                    <td scope="row"><?php  echo $fila['tiempo']?></td>
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