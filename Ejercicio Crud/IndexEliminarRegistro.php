<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EstilosIndexEliminar.css">
    <title>ELIMINAR / REGISTRO</title>
</head>
<body>
<form action="EjercicioEliminarRegistro.php" method="POST">
    <h1>Eliminar Datos de Usuario</h1>
		<label for="id">Id:</label>
		<input type="text" id="id" name="id" required><br><br>
		<input  type="submit" value="Eliminar">
        <a href="IndexRegistro.php"><input type="button" value="Volver"></a>
    
	</form>
</body>
</html>