<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloformulario.css">
    <title>Consulta</title>
</head>
<body>
<form action="consultas.php" method="POST">
    <h1>Consultar Datos:</h1>
        <label for="nombre">nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		<input  type="submit" value="CONSULTAR">
        <a href="Index.php"><input type="button" value="Volver"></a>
	</form>
</body>
</html>