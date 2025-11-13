<?php
//Ejercicio 23. Crea una función que, dado un número entero, devuelva true si es un número Armstrong (un número que es igual a la suma de sus propios dígitos elevados a una potencia).

function esNumeroArmstrong($numero) {
    // Comprobar si el número es válido
    if (!is_numeric($numero) || (int)$numero != $numero || $numero < 0) {
        return "Error: El numero debe ser un número entero no negativo.";
    }

    $numeroStr = (string)$numero;
    $numDigitos = strlen($numeroStr);
    $sumaPotencias = 0;

    // Calcular la suma de los dígitos elevados a la potencia del número de dígitos
    for ($i = 0; $i < $numDigitos; $i++) {
        $digito = (int)$numeroStr[$i];
        $sumaPotencias += pow($digito, $numDigitos);
    }

    // Comprobar si la suma de las potencias es igual al número
    return $sumaPotencias == $numero;
}
//Pruebas
echo "Introduce un número entero no negativo para comprobar si es un número Armstrong:\n";
echo "> ";
$numero = readline();
$resultado = esNumeroArmstrong($numero);
if (is_string($resultado)) {
    echo $resultado . "\n";
} else {
    if ($resultado) {
        echo "El número $numero es un número Armstrong.\n";
    } else {
        echo "El número $numero no es un número Armstrong.\n";
    }
}
?>