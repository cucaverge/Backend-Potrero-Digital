<?php

//Crear una variable n con valor númerico.
$n = 5;


//Si es positivo, imprimir el mensaje.
if ($n > 0) {
    echo "El número ingresado es un número positivo." . "<br>";
}


//Si es mayor a 1 y menor a 10, imprimir el mensaje.
if ($n > 1 && $n < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10." . "<br>";
}


//Si es mayor o igual a 10 o menor a 2, imprimir un mensaje, sino imprimir otro.
if ($n >= 10 || $n < 2) {
    echo "El número ingresado es mayor o igual a 10, o menor a 2." . "<br>";
} else {
    echo "El número ingresado no pudo ser validado" . "<br>";
}

//Crear dos variables con valores numéricos
$numero1 = 10;
$numero2 = 5;

//Si numero1 es mayor que numero2, imprimir la suma y la resta.
//Si numero2 es mayor que numero1, imprimir multiplicación, división entera y resto.
//Si numero1 y numero2 son iguales imprimir el mensaje.
if ($numero1 > $numero2) {
    echo "La suma es: " . ($numero1 + $numero2) . "<br>" . 
        "La resta es: " . ($numero1 - $numero2) . "<br>";
} elseif ($numero2 > $numero1) {
    echo "La multiplicación es: ". ($numero2 * $numero1) . "<br>" . 
        "La división entera es: " . ($numero2 / $numero1) . "<br>" . 
        "El resto es: " . ($numero2 % $numero1) . "<br>";
} else {
    echo "Los números ingresados son iguales.";
}

?>