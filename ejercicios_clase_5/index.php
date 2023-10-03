<?php

// Mostrar los números del 1 al 9
$numeros = 1;

while ($numeros < 10) {
    echo "$numeros" . "<br>";
    $numeros++;
}

echo "<br>";

// Mostrar los números del 9 al 1
$numeros = 9;

while ($numeros < 10 && $numeros >= 1) {
    echo "$numeros" . "<br>";
    $numeros--;
}

echo "<br>";

// Mostrar los números pares del 1 al 20
$numeros = 1;

while ($numeros <= 20) {
    if ($numeros % 2 == 0) {
    echo "$numeros" . "<br>";
    }
    $numeros++;
}

echo "<br>";

// Mostrar los números impares del 1 al 20
$numeros = 1;

while ($numeros <= 20) {
    if ($numeros % 2 != 0) {
    echo "$numeros" . "<br>";
    }
    $numeros++;
}

echo "<br>";

// Mostrar la suma de los números del 1 al 20
$numeros = 1;
$suma = 0;

while ($numeros <= 20) {
    $suma += $numeros;
    $numeros ++;
}

echo "$suma";

echo "<br>";

// Mostrar la suma de los números pares del 1 al 20
$numeros = 1;
$suma = 0;

while ($numeros <= 20) {
    if ($numeros %2 == 0) {
    $suma += $numeros;
}
    $numeros ++;
}

echo "$suma";
?>