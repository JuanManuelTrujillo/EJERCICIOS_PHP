<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "datos_registro_usuarios_juan";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

 // Consultar la base de datos para verificar las credenciales
 $sql = "SELECT * FROM datos_usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
 $result = $conn->query($sql);

 if ($result->num_rows == 1) {
	 // Inicio de sesión exitoso
	 session_start();
	 $_SESSION["usuario"] = $usuario;
	 header("Location: EjercicioPaginaComidas.html ");
	 exit();
 } else {
	 // Credenciales incorrectas
	echo $error_message = "Usuario o contraseña incorrectos";
 }
}

$conn->close();
?>