<!DOCTYPE html>
<html>
<head>
	<title>Formulario Estudiante</title>
	<link rel="stylesheet" type="text/css" href="EstilosFormularioEstudiante.css">
</head>
<body>

    
	<h1>Formulario Datos Personales</h1>
	<form action="EjercicioFormularioEstudiante.php" method="POST">
		<label for="nombre">Nombre Estudiante:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
        <label for="apellido">Apellido Estudiante:</label>
		<input type="text" id="apellido" name="apellido" required><br><br>
        <label for="curso">Curso:</label>
		<input type="text" id="curso" name="curso" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="telefono">Teléfono:</label>
		<input type="telefono" id="telefono" name="telefono" required><br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>