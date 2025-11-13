<?php
//Ejercicio 21. Crea una función que invierta una cadena de texto. Por ejemplo, "hola" debería convertirse en "aloh".

function invertirCadena($cadena) {
    // Comprobar si la cadena es válida
    if (!is_string($cadena)) {
        return "Error: El parámetro debe ser una cadena de texto.";
    }

    $cadenaInvertida = '';

    for ($i = strlen($cadena) - 1; $i >= 0; $i--) {
        $cadenaInvertida .= $cadena[$i];
    }

    return $cadenaInvertida;
}
//Pruebas
echo "Introduce una cadena de texto para invertir:\n";
echo "> ";
$texto = readline();
$resultado = invertirCadena($texto);
echo $resultado . "\n";
?>