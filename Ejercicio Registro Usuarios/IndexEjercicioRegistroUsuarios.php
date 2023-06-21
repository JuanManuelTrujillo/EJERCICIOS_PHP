<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuarios</title>
	<link rel="stylesheet" type="text/css" href="EstiloRegistroUsuario.css">
</head>
<body>

    
	
	<form action="EjercicioRegistroUsuario.php" method="POST">
    <h1>Registro de Usuarios</h1>
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
        <label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contraseña">Contraseña:</label>
		<input type="text" id="contraseña" name="contraseña" required><br><br>
		<input type="submit" value="Crear Cuenta">
		<a href="IndexEjercicioInicioSesion.php">Iniciar Sesión</a>
	</form>
</body>
</html>