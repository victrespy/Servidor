<?php
//Ejercicio 25. Crea una función que utilice la expresión match de PHP 8 para clasificar una nota numérica (0-10) en su correspondiente calificación textual.

function clasificarNota($nota) {
    // Comprobar si la nota es válida
    if (!is_numeric($nota) || (int)$nota != $nota || $nota < 0 || $nota > 10) {
        return "Error: La nota debe ser un número entero entre 0 y 10.";
    }

    return match ((int)($nota)) {
        0, 1, 2, 3, 4   => "Suspenso",
        5, 6            => "Aprobado",
        7, 8            => "Notable",
        9, 10           => "Sobresaliente",
    };
}
//Pruebas
echo "Introduce una nota numérica (0-10) para clasificarla:\n";
echo "> ";
$nota = readline();
$resultado = clasificarNota($nota);
echo $resultado . "\n";
?>