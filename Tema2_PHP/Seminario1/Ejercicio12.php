<?php
//Ejercicio 12. Crea una función que determine si un número dado es capicúa.

function esCapicua($numero) {
    // Comprobar si el número es válido
    if (!is_numeric($numero) || $numero < 0 || floor($numero) != $numero) {
        return "Error: El número debe ser un entero no negativo.";
    }

    $strNumero = (string)$numero;

    for ($i = 0; $i < strlen($strNumero) / 2; $i++) {
        if ($strNumero[$i] != $strNumero[strlen($strNumero) - $i - 1]) {
            return false;
        }
    }
    return true;
}
//Pruebas
echo "Introduce un número:\n";
echo "> ";
$numero = readline();
$resultado = esCapicua($numero);
if(is_string($resultado)) {
    echo $resultado . "\n";
} else {
    if($resultado) {
        echo "El número " . $numero . " es capicúa.\n";
    } else {
        echo "El número " . $numero . " no es capicúa.\n";
    }
}
?>
