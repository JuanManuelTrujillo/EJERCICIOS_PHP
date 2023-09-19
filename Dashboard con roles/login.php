<?php

 include('conexion.php');

$usuario	= $_POST["usuario"];
$contraseña	= $_POST["contraseña"];
$rol 	= $_POST["rol"];



$usuario = mysqli_query($conn,"SELECT * FROM login  WHERE usuario ='$usuario' and contraseña = '$contraseña' and rol = '$rol'");
$fila 		= mysqli_num_rows($usuario);  
	
if ($fila == 1 )  
	{ 
		if($rol=="Usuario")
			{	
				header("Location: usuario.php");
			}
		else if ($rol=="Admin")
			{
				header("Location: admin.php");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.php' </script>";
	}


?>