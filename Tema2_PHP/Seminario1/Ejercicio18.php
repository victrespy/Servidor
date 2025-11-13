<?php
//Ejercicio 18. Crea una función que determine si un número es primo.

function esPrimo($numero) {
    // Comprobar si el número es menor que 2
    if ($numero < 2) {
        return false;
    }
    // Comprobar si el número es divisible por algún número entre 2 y la mitad del número
    for ($i = 2; $i <= $numero/2; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}
//Pruebas
echo "Introduce un número para comprobar si es primo:\n";
echo "> ";
$numero = readline();
if (!is_numeric($numero) || (int)($numero) != $numero) {
    echo "Error: Por favor, introduce un número entero válido.\n";
} else {
    $numero = (int)($numero);
    if (esPrimo($numero)) {
        echo "El número $numero es primo.\n";
    } else {
        echo "El número $numero no es primo.\n";
    }
}
?>