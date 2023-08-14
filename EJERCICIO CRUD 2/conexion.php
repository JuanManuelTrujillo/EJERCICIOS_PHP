<?php
$servername = "localhost:3306"; 
$username = "root"; 
$password = "root"; 
$dbname = "registro"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}
?>