<?php
    //Imprimir "Hola mundo"
    echo "Hola mundo"; 

    echo "<br>";
    echo "<br>";

    //Asignar variable String "Hola mundo"
    $saludo = "Hola mundo";
    echo $saludo;
    echo "<br>";
    echo "<br>";

    //Operaciones aritméticas
    $numero1 = 5;
    $numero2 = 10;

    //Suma
    echo $numero1 + $numero2;
    echo "<br>";

    //Resta
    echo $numero1 - $numero2;
    echo "<br>";

    //Multiplicación
    echo $numero1 * $numero2;
    echo "<br>";


    //División
    echo $numero2 / $numero1;
    echo "<br>";

    //Resto
    echo $numero2 % $numero1;
    echo "<br>";
    echo "<br>";

    
    //Transformación de grados Celsius a Fahrenheit e imprimir
    $gradosCelsius = 20;
    echo $gradosCelsius . " °C";
    echo "<br>";

    $gradosFahrenheit = ($gradosCelsius * 9 / 5) + 32;
    echo $gradosFahrenheit . " °F";
    echo "<br>";
    echo "<br>";


    //Perímetro y área del rectángulo
    $base = 18;
    $altura = 12;
    $area = $base * $altura;
    $perimetro = ($base * 2) + ($altura * 2);
    echo "Area del rectángulo: " . $area . " cm2";
    echo "<br>";
    echo "Perímetro del rectángulo: " . $perimetro . " cm";
    echo "<br>";
    echo "<br>";

    //Perímetro y área del círculo
    $radio = 30;
    $pi = M_PI;
    $perimetroCirculo = 2 * $pi * $radio;
    $areaCirculo = $pi * ($radio * $radio);
    echo "Area del círculo: " . $areaCirculo . " cm2";
    echo "<br>";
    echo "Perímetro del círculo: " . $perimetroCirculo . " cm";    
?>