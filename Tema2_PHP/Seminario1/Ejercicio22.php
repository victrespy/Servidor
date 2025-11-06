<?php
//Ejercicio 22. Crea una función que, dado un número, devuelva true si es un número perfecto (la suma de sus divisores propios positivos es igual al número), o false en caso contrario.

function esNumeroPerfecto($numero) {
    // Comprobar si el número es válido
    if (!is_numeric($numero) || (int)$numero != $numero || $numero <= 0) {
        return "Error: El numero debe ser un número entero positivo.";
    }

    $sumaDivisores = 0;

    // Calcular la suma de los divisores propios positivos
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }

    // Comprobar si la suma de los divisores es igual al número
    return $sumaDivisores == $numero;
}
//Pruebas
echo "Introduce un número entero positivo para comprobar si es un número perfecto:\n";
echo "> ";
$numero = readline();
$resultado = esNumeroPerfecto($numero);
if (is_string($resultado)) {
    echo $resultado . "\n";
} else {
    if ($resultado) {
        echo "El número $numero es un número perfecto.\n";
    } else {
        echo "El número $numero no es un número perfecto.\n";
    }
}
?>