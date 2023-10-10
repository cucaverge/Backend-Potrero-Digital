<?php

//Obtener  y  mostrar  el  resultado  del  factorial  de  8  
$numero = 8;
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es $factorial";
?>