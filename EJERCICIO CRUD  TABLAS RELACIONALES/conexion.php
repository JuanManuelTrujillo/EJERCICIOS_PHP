<?php
$servername = "localhost:3306"; 
$username = "root"; 
$password = "root"; 
$dbname = "universidad"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}
?>