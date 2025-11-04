<?php
//Ejercicio 9. Crea una función que calcule el máximo común divisor de dos números naturales.

function mcd($a, $b) {

    // Comprobar si el número está vacío o es null
    if (empty($a) || empty($b)) {
        return "Error: Algun número está vacío";
    }

    // Comprobar si es un número válido
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Error: No has introducido un número válido";
    }

    while ($b != 0) {
        // Algoritmo de Euclides
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

//Pruebas
echo "Introduce el primer número:\n";
echo "> ";
$numero1 = readline();
echo "Introduce el segundo número:\n";
echo "> ";
$numero2 = readline();
$resultado = mcd($numero1, $numero2);
if(is_numeric($resultado)) {
    echo "El máximo común divisor es: " . $resultado . "\n";
} else {
    echo $resultado . "\n";
}
?>