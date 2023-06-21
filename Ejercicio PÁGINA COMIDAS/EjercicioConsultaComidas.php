<?php
if (isset($_POST['enviar'])) 
{
    $producto= $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
  
   $resultado = $cantidad * $precio;
   $sub=$precio*$cantidad;
   $des=0;
   if(isset($resultado))
   {
        echo "El precio total de su compra es de: " ." ".$resultado. "<br>";
   }
   if ($cantidad>=0 && $cantidad <=2) 
   {
       echo"No tiene descuento" ."<br>";
   }
   elseif($cantidad >=2.1 && $cantidad <=5)
   {
       $des=$sub*0.10;
        echo"Tienes un descuento del 10% ". " "."<br>";
   }
   elseif($cantidad <2)
   {
    echo"No tienes descuento"." "."<br>";
   }
   else 
   {
     $des=$sub*0.20;
     echo"Tienes un descuento del 20%: ". " ".$des ."<br>";
   }
       $total= $sub-$des;
       echo"El total a pagar es de: ".$total;        
   
}
?>