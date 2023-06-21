<?php
require 'conexion.php'; //Nombre de el archivo de conexión
require 'pdf/fpdf.php';//Nombre de la carpeta donde esta el archivo

$pdf = new FPDF (); //Crea un nuevo archivo
$pdf->addpage(); // crea una nueva pagina
$pdf->setfont("arial", "b", 12); //tipo de letra y tamaño
$pdf->cell(100,5,"reporte en pdf con sql",0,0,"R"); //tamaño de la celda(largo y ancho); texto de celda y borde del texto.

$pdf->output();
?>