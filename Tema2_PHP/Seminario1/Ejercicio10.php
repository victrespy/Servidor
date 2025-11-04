<?php
//Ejercicio 10. Crea una función que calcule el término n-ésimo de la sucesión de Fibonacci.

function fibonacci($n) {

    // Comprobar si el número está vacío o es null
    if (empty($n)) {
        return "Error: El número está vacío";
    }

    // Comprobar si es un número válido
    if (!is_numeric($n) || $n < 0 || floor($n) != $n) {
        return "Error: No has introducido un número válido";
    }

    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        $a = 0;
        $b = 1;
        for ($i = 2; $i <= $n; $i++) {
            $temp = $b;
            $b = $a + $b;
            $a = $temp;
        }
        return $b;
    }
}

//Pruebas
echo "Introduce el término n-ésimo que deseas calcular en la sucesión de Fibonacci:\n";
echo "> ";
$numero = readline();
$resultado = fibonacci($numero);
if(is_numeric($resultado)) {
    echo "El término " . $numero . " de la sucesión de Fibonacci es: " . $resultado . "\n";
} else {
    echo $resultado . "\n";
}
?>