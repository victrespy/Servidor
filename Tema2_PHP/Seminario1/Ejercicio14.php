<?php
//Ejercicio 14. Crea una función que dado un número n imprima el siguiente 'mosaico' (para n = 6):
//1
//22
//333
//4444
//55555
//666666

function imprimirMosaico($n) {
    // Comprobar si el número es válido
    if (!is_numeric($n) || $n < 1 || floor($n) != $n) {
        return "Error: El número debe ser un entero positivo.";
    }

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "\n";
    }
}
//Pruebas
echo "Introduce un número entero positivo:\n";
echo "> ";
$numero = readline();
$resultado = imprimirMosaico($numero);
?>