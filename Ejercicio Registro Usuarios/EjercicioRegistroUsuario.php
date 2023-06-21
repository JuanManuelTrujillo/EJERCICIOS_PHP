<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "datos_registro_usuarios_juan";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

// Verificar si el usuario ya existe en la base de datos
$sql = "SELECT id FROM datos_usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "El nombre de usuario ya esta registrado. Por favor, elige otro nombre de usuario.";
} else {

// Insertar datos en la base de datos
$sql = "INSERT INTO datos_usuarios (Nombre, Usuario, Contraseña) VALUES ('$nombre', '$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
// Redireccionar a la página de inicio de sesión
     header("Location: IndexEjercicioInicioSesion.php");
     exit();

} else {
	echo "Error al registrar el usuario". $conn->error;
}
}
}


$conn->close();
?>