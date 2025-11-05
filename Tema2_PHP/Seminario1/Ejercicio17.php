<?php
//Ejercicio 17. Crea una función que dada un array de números, devuelva un nuevo array con solo los números pares.

function filtrarPares($array) {
    // Comprobar si el array es válido
    if (!is_array($array)) {
        return "Error: El parámetro debe ser un array.";
    }

    //otra forma con el filter
    return array_filter($array, function($n) {
        if(is_numeric($n)) {
            return $n % 2 == 0;
        } else {
            return false;
        }
    });
}
//Pruebas
echo "Introduce los elementos del array separados por comas:\n";
echo "> ";
$input = readline();
$array = explode(',', $input);
$resultado = filtrarPares($array);
if(is_string($resultado)) {
    echo $resultado . "\n";
} else {
    echo "Los números pares del array son: " . implode(', ', $resultado) . "\n";
}
?>