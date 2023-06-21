<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EstilosIndexEliminar.css">
    <title>ACTUALIZAR / REGISTRO</title>
</head>
<body>
<form action="EjercicioConsultarRegistro.php" method="POST">
    <h1>Consultar Datos de Usuario</h1>
        <label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label>
		<input type="text" id="email" name="email" required><br><br>
		<input  type="submit" value="CONSULTAR">
        <a href="IndexRegistro.php"><input type="button" value="Volver"></a>
    
	</form>
</body>
</html>