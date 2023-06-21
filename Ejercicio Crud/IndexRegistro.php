<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO / CRUD</title>
	<link rel="stylesheet" type="text/css" href="EstilosIndexRegistro.css">
</head>
<body>

    
	
	<form action="EjercicioCrud.php" method="POST">
    <h1>Registro de Usuario</h1>
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<input  type="submit" value="Registrarse">
        <a href="IndexEliminarRegistro.php"><input type="button" value="Eliminar"></a>
        <a href="IndexActualizarRegistro.php"><input type="button" value="Actualizar"></a>
        <a href="IndexConsultarRegistro.php"><input type="button" value="Consultar"></a>
        
        
		
	</form>

</body>
</html>