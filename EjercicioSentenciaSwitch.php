<?php
/* sentencia que prueba una variable contra una serie de valores hasta que se encuentra la coincidencia*/
$color_favorito = "negro";
switch ($color_favorito) {
    case 'rojo':
            echo"Tu color favorito es el rojo";
        break;
        case 'azul':
            echo"Tu color favorito es el azul";
        break;
        case 'verde':
            echo"Tu color favorito es el verde";
        break;
        case 'rosado':
            echo"Tu color favorito es el rosado";
        break;
    default:
            echo "Tu color no fue encontrado";
        break;
}
?>
