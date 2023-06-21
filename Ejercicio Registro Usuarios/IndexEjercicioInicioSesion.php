<!DOCTYPE html>
<html>
<head>
	<title>Inicio Sesión</title>
	<link rel="stylesheet" type="text/css" href="EstilosInicioSesion.css">
</head>
<body>

    
	
	<form action="EjercicioInicioSesion.php" method="POST">
    <h1>Iniciar Sesión</h1>
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contraseña">Contraseña:</label>
		<input type="password" id="contraseña" name="contraseña" required><br><br>
		<input  type="submit" value="Iniciar Sesión">
		<a href="IndexEjercicioRegistroUsuarios.php">Registro Usuario</a>
	</form>

</body>
</html>