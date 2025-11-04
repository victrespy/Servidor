<?php
//Ejercicio 8. Crea una función que sume los dígitos de un número.

function sumarDigitos($numero) {
    // Comprobar si el número está vacío o es null
    if (empty($numero)) {
        return "Error: El número está vacío";
    }

    // Comprobar si es un número válido
    if (!is_numeric($numero)) {
        return "Error: No has introducido un número válido";
    }

    // Convertir el número a cadena para iterar sobre cada dígito
    $numeroStr = strval($numero);
    $suma = 0;

    // Sumar cada dígito
    for ($i = 0; $i < strlen($numeroStr); $i++) {
        // Sumar el dígito convertido a entero
        $suma += ($numeroStr[$i]);
    }

    return $suma;
}
//Pruebas
echo "Introduce un número:\n";
echo "> ";
$numero = readline();
$resultado = sumarDigitos($numero);
if(is_numeric($resultado)) {
    echo "La suma de los dígitos es: " . $resultado . "\n";
} else {
    echo $resultado . "\n";
}
?>