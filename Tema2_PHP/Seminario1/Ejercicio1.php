<?php

//Ejercicio 1. Crea una función que obtenga el número máximo de un array de números.

$array = [3, 5, 7, 2, -1, 4, 10, 6];
$maximo = calcularMax($array);
echo "El número máximo es: " . $maximo . "\n";
function calcularMax(array $numeros) {
    if (empty($numeros)) {
        return "El array está vacío.";
    }

    foreach ($numeros as $numero) {
        if (is_numeric($numero)) {
            $maximo = $numero;
            break;
        }
    }

    foreach ($numeros as $numero) {
        if (is_numeric($numero)) {
            if ($numero > $maximo) {
                $maximo = $numero;
            }
        } else {
            echo "Illo tiooo, no metas palabras anda. La palabra $numero no se va a tener en cuenta. \n";
        }
    }

    return $maximo;
}
?>