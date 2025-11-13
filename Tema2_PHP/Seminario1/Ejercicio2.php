<?php
//Ejercicio 2. Crea una función que obtenga la sumatoria de un array de números.

function sumatoriaArray(array $numeros) {
    if (empty($numeros)) {
        echo "El array está vacío, no hay números para sumar.\n";
        return 0;
    }

    $suma = 0;
    foreach ($numeros as $numero) {
        if (is_numeric($numero)) {
            $suma += $numero;
        } else {
            echo "Illo tiooo, no metas palabras anda. La palabra $numero no se va a sumar.\n";
        }
    }
    return $suma;
}

$array = [1, -2, 3, "hola", 4.5, 5];
$resultado = sumatoriaArray($array);
echo "La sumatoria del array es: " . $resultado . "\n";

?>