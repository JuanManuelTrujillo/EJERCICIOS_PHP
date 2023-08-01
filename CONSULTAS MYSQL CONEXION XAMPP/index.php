<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estiloformulario.css">
</head>
<body>
    <form action="conexion.php" method="post">
    <h1>Formulario de Contacto</h1>
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" require>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" require>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" require>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" require>
        <input type="submit" value="enviar">
        <a href="Indexconsulta.php"><input type="button" value="CONSULTAS"></a>
    </form>
    
</body>
</html>