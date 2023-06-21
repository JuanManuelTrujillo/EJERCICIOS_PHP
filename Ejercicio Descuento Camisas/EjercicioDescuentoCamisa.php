<?php
if (isset($_POST['enviar'])) 
{
     $valor =$_POST['valor'];
     $cantidad =$_POST['cantidad'];

     $sub=$valor*$cantidad;
     $des=0;
if ($cantidad>=3) 
{
     $des=$sub*0.20;
     echo"Tienes un descuento del 20%: ". " ".$des . "<br>";
}
elseif($cantidad <2)
{
    echo"No tienes descuento"." "."<br>";
}
else 
{
     $des=$sub*0.10;
     echo"Tienes un descuento del 10%: ". " ".$des ."<br>";
}
$total= $sub-$des;
echo"El total a pagar es: ".$total;
}
 ?>
