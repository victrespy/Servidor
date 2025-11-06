<?php
//Ejercicio 20. Crea una función que calcule el factorial de un número.

function calcularFactorial($numero) {
    // Comprobar si el número es válido
    if (!is_numeric($numero) || (int)$numero != $numero || $numero < 0) {
        return "Error: El numero debe ser un número entero no negativo.";
    }

    $factorial = 1;
    for ($i = 2; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}
//Pruebas
echo "Introduce un número entero no negativo para calcular su factorial:\n";
echo "> ";
$numero = readline();
echo calcularFactorial($numero) . "\n";
?>