<?php

//Función de perímetro y superficie de un cuadrado
function cuadrado($lado) {
    $perimetro = $lado * 4;
    $superficie = $lado * $lado;
    return array('perimetro' => $perimetro, 'superficie' => $superficie);
}

$cuadrado1 = cuadrado(2);

echo "Perímetro: " . $cuadrado1['perimetro'] . "<br>";
echo "Superficie: " . $cuadrado1['superficie'];

echo "<br>";
echo "<br>";

// Función para mostrar el texto en mayúsculas
function mostrarMayusculas($texto) {
    $textoEnMayusculas = strtoupper($texto);
    echo $textoEnMayusculas;
}

// Función para mostrar el texto en minúsculas
function mostrarMinusculas($texto) {
    $textoEnMinusculas = strtolower($texto);
    echo $textoEnMinusculas;
}


$cadena = "Hola Mundo";
// Mayúsculas
echo "Mayúsculas: ";
mostrarMayusculas($cadena);

echo "<br>";

// Minúsculas
echo "Minúsculas: ";
mostrarMinusculas($cadena);

echo "<br>";
echo "<br>";


// Función que devuelve si el mes tiene 30 o 31 días
function diasEnElMes($mes) {
    switch ($mes) {
        case 4:
        case 6:
        case 9:
        case 11:
            return "El mes $mes tiene 30 días.";
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            return "El mes $mes tiene 31 días.";
        default:
            return "Mes no válido. Ingresa un número de mes válido (1 al 12).";
    }
}

$numeroDeMes = 7;

$resultado = diasEnElMes($numeroDeMes);
echo $resultado;

echo "<br>";
echo "<br>";


// Función para indicar si un string es palíndromo
function esPalindromo($cadena) {
    $cadena = strtolower(str_replace(' ', '', $cadena));
    return $cadena === strrev($cadena);
}

$cadena = "Somos o no somos";

if (esPalindromo($cadena)) {
    echo "La cadena \"$cadena\" es un palíndromo.";
} else {
    echo "La cadena \"$cadena\" no es un palíndromo.";
}
?>
