<?php
require 'conexion.php'; //Nombre de el archivo de conexión
require 'plantilla.php';//Nombre de la carpeta donde esta el archivo

$grado = $_POST['nombre'];
$pdf = new PDF (); //Crea un nuevo archivo
$pdf->addpage(); // crea una nueva pagina
$pdf->setfont("times", "b", 12); //tipo de letra y tamaño
$pdf->cell(100,5,"REPORTE EN PDF CON SQL",0,0,"R"); //tamaño de la celda(largo y ancho); texto de celda y borde del texto.

// Consulta para obtener todos los registros
$sql = "SELECT alumno, apellido, edad, telefono FROM estudiantes WHERE alumno = '$grado'";
$result = $conn->query($sql);
$pdf->Ln(30); //Salto de linea 

$pdf-> cell(50,8, "Alumno",1,0,"C"); //Estructura de la tabla
$pdf-> cell(50,8, "Apellido",1,0,"C");
$pdf-> cell(30,8, "Edad",1,0,"C");
$pdf-> cell(50,8, "Telefono",1,1,"C");

//Encabezado de la linea
while ($fila=$result->fetch_assoc()){

    $pdf-> cell(50,8,$fila[ "alumno"],1,0,"L");
    $pdf-> cell(50,8,$fila[ "apellido"],1,0,"C");
    $pdf-> cell(30,8,$fila[ "edad"],1,0,"C");
    $pdf-> cell(50,8,$fila[ "telefono"],1,1,"C");
}

$pdf->addpage(); 
$pdf->output();

?>