<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar que se ingresó el nombre del alumno
    if (empty($_POST["nombre"])) {
        echo "Por favor, ingrese el nombre del alumno.<br>";
    } else {
        $nombre = $_POST["nombre"];

        // Validar que se ingresó la nota y que es un número
        if (isset($_POST["nota"]) && is_numeric($_POST["nota"])) {
            $nota = $_POST["nota"];

            // Validar que la nota esté en el rango de 0 a 10
            if ($nota >= 0 && $nota <= 10) {
                // Determinar la calificación según la nota
                $calificacion = "";
                if ($nota >= 0 && $nota <= 2) {
                    $calificacion = "Muy deficiente";
                } elseif ($nota >= 3 && $nota <= 5) {
                    $calificacion = "Insuficiente";
                } elseif ($nota >= 6 && $nota <= 7) {
                    $calificacion = "Bien";
                } elseif ($nota >= 8 && $nota <= 9) {
                    $calificacion = "Notable";
                } elseif ($nota == 10) {
                    $calificacion = "Sobresaliente";
                }

                // Mostrar la calificación resultante
                echo "<h2>Calificación de $nombre:</h2>";
                echo "<p>Nota Numérica: $nota</p>";
                echo "<p>Calificación: $calificacion</p>";
            } else {
                echo "La nota debe estar en el rango de 0 a 10.<br>";
            }
        } else {
            echo "Por favor, ingrese una nota válida.<br>";
        }
    }
} else {
    echo "Acceso no autorizado.";
}
?>