<?php
require 'conexion.php'; //Nombre de el archivo de conexión
require 'fpdf/fpdf.php';//Nombre de la carpeta donde esta el archivo

$pdf = new FPDF (); //Crea un nuevo archivo
$pdf->addpage(); // crea una nueva pagina
$pdf->setfont("arial", "b", 12); //tipo de letra y tamaño
$pdf->image("IMAGENES/google.png",20,4,20,); //Posicion horizontal,posicion vertical ,tamaño
$pdf->cell(100,5,"Reporte en pdf con sql",0,0,"R"); //tamaño de la celda(largo y ancho); texto de celda y borde del texto.

 // Consultar la base de datos para verificar las credenciales
 $sql = "SELECT codigo_alumno, alumno, apellido, edad, telefono FROM estudiantes";
 $result = $conn->query($sql);
 $pdf->Ln(30); //Salto de linea

 //Encabezado de la tabla
 $pdf->cell(40,8,"Codigo Alumno",1,0,"C"); //Estructura de la tablas
 $pdf->cell(50,8,"Alumno",1,0,"C"); 
 $pdf->cell(40,8,"Apellido",1,0,"C");
 $pdf->cell(25,8,"Edad",1,0,"C");
 $pdf->cell(30,8,"Telefono",1,1,"C");
 $pdf->Ln(30); //Salto de linea

 //Tabla con los datos
 while ($fila=$resultado->fetch_assoc()) {
 $pdf->cell(40,8,$fila["codigo_alumno"],1,0,"C"); //Estructura de la tablas
 $pdf->cell(50,8,$fila["alumno"],1,0,"C"); 
 $pdf->cell(40,8,$fila["apellido"],1,0,"C");
 $pdf->cell(25,8,$fila["edad"],1,0,"C");
 $pdf->cell(30,8,$fila["telefono"],1,0,"C");  
}


$pdf->output();
?>