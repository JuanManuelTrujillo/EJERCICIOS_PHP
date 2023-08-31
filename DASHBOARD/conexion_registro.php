<?php
// Conexión a la base de datos
$servername = "localhost:3306"; 
$username = "root"; 
$password = "root"; 
$dbname = "dashboard_juan"; 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

// Verificar si el usuario ya existe en la base de datos
$sql = "SELECT id FROM registro_usuarios WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "El correo ya se encuentra registrado. Por favor, elige otro correo electrónico.";
} else {

// Insertar datos en la base de datos
$sql = "INSERT INTO registro_usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

if ($conn->query($sql) === TRUE) {
// Redireccionar a la página de inicio de sesión
     header("Location: index.php");
     exit();

} else {
	echo "Error al registrar el correo electrónico". $conn->error;
}
}
}

$conn->close();
?>