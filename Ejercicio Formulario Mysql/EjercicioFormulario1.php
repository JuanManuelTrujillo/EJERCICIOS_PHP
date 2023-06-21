<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="EstilosFormulario.css">
</head>
<body>

    
	<h1>Formulario de contacto</h1>
	<form action="EjercicioFormulario.php" method="POST">
		<label for="Nombre">Nombre:</label>
		<input type="text" id="Nombre" name="Nombre" required><br><br>
		<label for="Email">Email:</label>
		<input type="Email" id="Email" name="Email" required><br><br>
		<label for="Telefono">Telefono:</label>
		<input type="Telefono" id="Telefono" name="Telefono" required><br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>