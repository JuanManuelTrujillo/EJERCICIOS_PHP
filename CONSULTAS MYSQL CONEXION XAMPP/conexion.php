<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "prueba_conexion";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

// Verificar si el usuario ya existe en la base de datos
$sql = "SELECT id FROM conexion WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "El ID ya esta registrado. Por favor, elige otro numero ID.";
} else{ 

// Insertar datos en la base de datos
$sql = "INSERT INTO conexion (id,nombre, email, telefono) VALUES ('$id', '$nombre', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
// Redireccionar a la página de inicio de sesión
     echo "Datos Insertados Correctamente";
     exit();

} else {
	echo "Error al registrar el usuario". $conn->error;
}
}
}

$conn->close();
?>