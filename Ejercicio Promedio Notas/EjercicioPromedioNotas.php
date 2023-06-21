<?php
if (isset($_POST['submit'])) 
{
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
  
if ($nota1<0 || $nota2>5)
{
    echo "el valor de nota 1 es incorrecto"; 
}
else if($nota2<0 || $nota2>5)
{
    echo"el valor de nota 2 es incorrecto"; 
}   
else if($nota3<0 || $nota3>5)
{
    echo"el valor de nota 3 es incorrecto"; 
}
else
{
    $promedio=($nota1 + $nota2+ $nota3) / 3;
    echo"su promedio es : ". $promedio . "<br>";
if($promedio>=3)
{
    echo"!!felicitaciones!! ganastes";
}
else
{
echo" puedes seguir mejorando...perdio ";
}
}
}
?>