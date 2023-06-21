<?php
/* Una funcion es un conjunto de instrucciones que a lo
// largo del programa vab a ser ejecutadas multitud de veces.
funcion saludo ()
{
    echo"Hola programador"."<br>";
}
saludo();

echo "Funciones con parametros" . "<br>";
/*Los parametros son los datos que reciben las funciones y que utilizan para
 una funcion puede recibir cualquier numero de parametros*/

 function saludo($nombre)
 {
    echo" ¡Hola ".$nombre . ", Eres un programador!";
 }
 saludo("Juan");
?>