<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juan manuel trujillo php";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["Nombre"];
$email = $_POST["Email"];
$telefono = $_POST["Telefono"];

// Insertar datos en la base de datos
$sql = "INSERT INTO juan (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
	echo "Datos insertados correctamente";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>