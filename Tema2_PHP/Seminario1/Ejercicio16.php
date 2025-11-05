<?php
//Ejercicio 16. Crea una función que calcule el producto de todos los elementos en un array de números.

function productoArray($array) {
    // Comprobar si el array es válido
    if (!is_array($array)) {
        return "Error: El parámetro debe ser un array.";
    }

    return array_reduce($array, function($acumulador, $n) {
        if(is_numeric($n)) {
            return $acumulador * $n;
        } else {
            return $acumulador;
        }
    }, 1);

}
//Pruebas
echo "Introduce los elementos del array separados por comas:\n";
echo "> ";
$input = readline();
$array = explode(',', $input);
$resultado = productoArray($array);
if(is_string($resultado)) {
    echo $resultado . "\n";
} else {
    echo "El producto de los elementos del array es: " . $resultado . "\n";
}
?>