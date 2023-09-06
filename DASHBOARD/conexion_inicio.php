<?php
session_start();

// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "dashboard_juan"; 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

 // Consultar la base de datos para verificar las credenciales
 $sql = "SELECT id, nombre FROM registro_usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";
 $result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso, redirige al usuario a una página de inicio
    $row = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['nombre_usuario'] = $row['nombre'];
    header("Location: dashboard-inicio.php");
} else {
    // Las credenciales son incorrectas, muestra un mensaje de error
    echo "Credenciales incorrectas. <a href='index.php'>Intenta de nuevo</a>";
}
}
$conn->close();
?>