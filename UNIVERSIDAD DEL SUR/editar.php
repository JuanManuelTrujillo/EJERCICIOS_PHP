<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR INSCRIPCIONES</h1>
    <br>
    <form class="container" action="editar.php" method="POST">
        <?php
         include 'Conexion.php';

            $sql = "SELECT * FROM estudiantes WHERE id =".$_GET['id'];
            $resultado = $conn->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">

        <div class="mb-3">
            <label class="form-label">Nombre Estudiante</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre_estudiante'];?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad" value="<?php echo $row['edad']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="text" class="form-control" name="correo_estudiante" value="<?php echo $row['correo_estudiante'];?>">
        </div>

        <!--TRAER DATOS CATEGORIAS-->
        <label>Programa</label>
        <select class="form-select mb-3" aria-label="Default select example" name="programa">
            <option selected disabled>--Seleccione marcas--</option>
            <?php
               include 'Conexion.php';

                $sql3 = "SELECT * FROM programa_matriculado WHERE id_programa=".$row['id_programa'];
                $resultado3 = $conn->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['id_programa']."'>".$row3['nombre_programa']."</option>";

                $sql4 = "SELECT * FROM programa_matriculado";
                $resultado4 = $conn->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['id_programa']."'>".$Fila['nombre_programa']."</option>";
                }
            ?>   
        </select>
        <label>Docentes</label>
        <select class="form-select mb-3" aria-label="Default select example" name="docente">
            <option selected disabled>--Seleccione Categorias--</option>
            <?php
               include 'Conexion.php';

                $sql1 = "SELECT * FROM docentes WHERE id_docente=".$row['id_docente'];
                $resultado1 = $conn->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['id_docente']."'>".$row1['nombre_docente']."</option>";

                $sql2 = "SELECT * FROM docentes";
                $resultado2 = $conn->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['id_docente']."'>".$Fila['nombre_docente']."</option>";
                }
            ?>   
        </select>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="Index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>