<?php
//Ejercicio 11. Crea una función que determine si dos números son primos relativos.
//Nota: Se dice que dos números son relativamente primos si su factor común más grande (MCD) es 1.

function mcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function sonPrimosRelativos($num1, $num2) {
    // Comprobar si los números son válidos
    if (!is_numeric($num1) || !is_numeric($num2) || $num1 < 1 || $num2 < 1 || floor($num1) != $num1 || floor($num2) != $num2) {
        return "Error: Ambos números deben ser enteros positivos.";
    }

    return mcd($num1, $num2) == 1;
}
//Pruebas
echo "Introduce el primer número:\n";
echo "> ";
$numero1 = readline();
echo "Introduce el segundo número:\n";
echo "> ";
$numero2 = readline();
$resultado = sonPrimosRelativos($numero1, $numero2);
if(is_string($resultado)) {
    echo $resultado . "\n";
} else {
    if($resultado) {
        echo "Los números " . $numero1 . " y " . $numero2 . " son primos relativos.\n";
    } else {
        echo "Los números " . $numero1 . " y " . $numero2 . " no son primos relativos.\n";
    }
}
?>