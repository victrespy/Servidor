<?php
//Ejercicio 7. Crea una función que ponga en mayúscula la primera letra de cada palabra de un texto.

function capitalizarPalabras($texto) {
    // Comprobar si el texto está vacío o es null
    if (empty($texto)) {
        return "Error: El texto esta vacio";
    }

    // Comprobar si es una cadena de texto
    if ((int)$texto != 0) {
        return "Error: No has introducido un texto";
    }

    // Poner en mayúscula la primera letra de cada palabra
    $textoCapitalizado = ucwords($texto);

    return $textoCapitalizado;
}
//Pruebas
echo "Introduce una cadena de texto:\n";
echo "> ";
$texto = readline();
$resultado = capitalizarPalabras($texto);
echo $resultado . "\n";
?>