<?php
//Realiza un programa que envie un mensaje
//Solo si este contiene menos de 100 letras
//Caso contrario que arroje error
$suma_letras = strlen("Hola buenas tardes, como estas?");

if($suma_letras <100)
{
    echo "El mensaje fue enviado exitosamente.";
}
else
{
    echo "No se ha podido enviar el mensaje ya que contiene:" ." "
. $suma_letras . " " . "letras";
}

echo "<hr>";

$suma_notas = (3.0) ;

if($suma_notas > 3.0)
{
    echo "Aprobó la materia";
}
else if($suma_notas == 3.0)
{
    echo "Pasa raspando con la bendicion de DIOS";
}
else
{
    echo "No aprobó la nota ya que obtuvo:" ." "
. $suma_notas . " " . "en su nota.";
}

echo "<hr>";

$calculo_edad = 30 ;

if($calculo_edad >= 25)
{
    echo "Usted es mayor de edad.";
}
else
{
    echo "Usted es menor de edad ya que tiene:" ." "
. $calculo_edad . " " . "años de edad.";
}

echo "<hr>";

//Forma abreviada de escribir el (if) y el (else)
$edad= 19;
echo ($edad >=18? "Mayor de edad":"Menor de edad");

echo "<hr>";

 //Vamos a resolver un probema sugerido en la web de contenido especial, limitado a adultos y menores
 //si la edad es menor de 18 debemos indicar que tiene acceso prohibido
 //si la edad es por encima de los 65 años le aviaremos que el contenido no es para ancianos
 // si la edad esta entre 18 y 65 le daremos un mensaje de bienvenida a la we

 $verificacion_edad = 19 ;

 if($verificacion_edad <18)
 {
     echo " Acceso prohibido a esta web.";
 }
 else if($verificacion_edad >65 )
 {
     echo "Este contenido no es para ancianos.";
 }
 else if($verificacion_edad =18-65 )
 {
     echo "Bienvenido a nuestra página web.";
 }
 //
echo "<hr>";
$suma_caracteres = strlen("Me gusto mucho tu investigacion ");

if($suma_caracteres <150)
{
    echo "Tu comentario fue enviado correctamente, gracias por comentar en nuestra web.";
}
else
{
    echo "No se puede enviar tu comentario ya que tienes:" ." "
. $suma_caracteres. " " . "caracteres y superas el limite.";
}
?>



