<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estudiante juan trujillo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$curso = $_POST["curso"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

// Insertar datos en la base de datos
$sql = "INSERT INTO datos(Nombre, Apellido, Curso, Email, Telefono) VALUES ('$nombre', '$apellido', '$curso', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
	echo "Datos de estudiante insertados correctamente";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>