<?php
require 'conexion.php'; //Nombre de el archivo de conexión
require 'plantilla.php';//Nombre de la carpeta donde esta el archivo

$grado = $_POST['nombre'];
$pdf = new PDF (); //Crea un nuevo archivo
$pdf->addpage(); // crea una nueva pagina
$pdf->setfont("times", "b", 12); //tipo de letra y tamaño
$pdf->cell(100,5,); //tamaño de la celda(largo y ancho); texto de celda y borde del texto.

// Consulta para obtener todos los registros
$sql = "SELECT id, nombre, apellido, email, telefono, sueldo, fecha_ingreso FROM trabajadores WHERE nombre = '$grado'";
$resultado= $conn->query($sql);
$pdf->Ln(30); //Salto de linea 

$pdf-> cell(10,8, "id",1,0,"C"); //Estructura de la tabla
$pdf-> cell(30,8, "nombre",1,0,"C");
$pdf-> cell(30,8, "apellido",1,0,"C");
$pdf-> cell(35,8, "email",1,0,"C");
$pdf-> cell(20,8, "telefono",1,0,"C");
$pdf-> cell(35,8, "sueldo",1,0,"C");
$pdf-> cell(35,8, "fecha_ingreso",1,1,"C");

//Encabezado de la linea
while ($fila=$resultado->fetch_assoc()) {

    $pdf-> cell(10,8,$fila[ "id"],1,0,"L");
    $pdf-> cell(30,8,$fila[ "nombre"],1,0,"C");
    $pdf-> cell(30,8,$fila[ "apellido"],1,0,"C");
    $pdf-> cell(35,8,$fila[ "email"],1,0,"C");
    $pdf-> cell(20,8,$fila[ "telefono"],1,0,"C");
    $pdf-> cell(35,8,$fila[ "sueldo"],1,0,"C");
    $pdf-> cell(35,8,$fila[ "fecha_ingreso"],1,0,"C");
}

$pdf->addpage(); 
$pdf->output();

?>