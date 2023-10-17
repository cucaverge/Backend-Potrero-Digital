<?php


//Almacenar y mostrar un array con los 10 primeros números pares
$pares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

foreach ($pares as $pares){
 echo $pares."<br>";
}

echo "<br>";
echo "<br>";

//Crear un array, introducir valores y mostrar el esquema
$array1 = ["Pedro", "Ana", 34, 1];
print_r($array1);

//Crear un array asociativo
$arrayAsociativo1 = [
    'nombre' => "Pedro",
    'apellido' => "Torres",
    'direccion' => "Av. Mayo 3703",
    'telefono' => 1122334455,
];

echo "<br>";
echo "<br>";

//Crear un array introduciendo las ciudades y mostrarlo
$array2 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($array2 as $codigo => $nombre) {
    echo "La ciudad con el índice $codigo es $nombre.<br>";
}

echo "<br>";
echo "<br>";

//Crear un array asociativo con los datos del anterior y mostrar
$arrayAsociativo2 = [
    'MD' => "Madrid",
    'BCL' => "Barcelona",
    'LD' => "Londres",
    'LA' => "Los Ángeles",
    'CCG' => "Chicago",
];

foreach ($arrayAsociativo2 as $codigo => $nombre) {
    echo "El índice de $nombre es $codigo.<br>";
}
?>

