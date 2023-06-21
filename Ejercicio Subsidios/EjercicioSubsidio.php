<?php
if (isset($_POST['enviar'])) 
{
    $nvsisben = $_POST['nvsisben'];
    $edad = $_POST['edad'];
  
if ($edad>=1 && $edad<=18 &&$nvsisben<=2)
{
    echo "Recibe subsidio de Nutrición por un valor de: 50.000 pesos "."<br>"; 
}
else if($edad>=18 && $edad<=30 && $nvsisben<=2)
{
    echo"Recibe subsidio de Nutrición por un valor de: 200.000 pesos "."<br>"; 
}   
else if($edad>=60 && $nvsisben<=2)
{
    echo"Recibe subsidio de Adulto Mayor por un valor de: 100.000 pesos"."<br>"; 
}
else if($edad>=40 && $edad<60 && $nvsisben>3)
{
    echo"No recibe subsidio "."<br>"; 
}
else 
{
    echo"No recibe subsidio "."<br>";
}
}
?>