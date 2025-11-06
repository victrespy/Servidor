<?php
//Ejercicio 15. Crear una función que reciba dos arrays de enteros y devuelva un array de booleanos que determine si los elementos, uno a uno, de ambos arrays son iguales.

function compararArrays($array1, $array2) {
    // Comprobar si ambos arrays son válidos
    if (!is_array($array1) || !is_array($array2)) {
        return "Error: Ambos parámetros deben ser arrays.";
    }

    if (count($array1) != count($array2)) {
        return "Error: Ambos arrays deben tener la misma longitud.";
    }

    $resultado = [];


    for ($i = 0; $i < count($array1); $i++) {
        $resultado[] = ($array1[$i] === $array2[$i]);
    }

    return $resultado;
}
//Pruebas
echo "Introduce los elementos del primer array separados por comas:\n";
echo "> ";
$array1 = readline();
$array1 = explode(',', $array1);
echo "Introduce los elementos del segundo array separados por comas:\n";
echo "> ";
$array2 = readline();
$array2 = explode(',', $array2);
$resultado = compararArrays($array1, $array2);
if(is_string($resultado)) {
    echo $resultado . "\n";
} else {
    var_dump($resultado);
}
?>