<?php
//Ejercicio 4. Crea una función que determine si una cadena de texto es un palíndromo.
//Nota: Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha que de derecha a izquierda, por ejemplo: "ana", "reconocer", "anilina".

function esPalindromo($texto) {
    // Comprobar si el texto está vacío o es null
    if (empty($texto)) {
        return "Error: No se ha proporcionado ningún texto";
    }

    // Comprobar si es una cadena de texto
    if ((int)$texto != 0) {
        return "Error: El valor proporcionado no es una cadena de texto";
    }

    //Comprobar si la cadena tiene numeros
    for ($i = 0; $i < strlen($texto); $i++) {
        if (is_numeric($texto[$i])) {
            return "Error: La cadena no debe contener números";
        }
    }

    // Convertir a minúsculas y eliminar espacios y acentos
    $texto = strtolower($texto);
    $texto = trim($texto);
    $texto = str_replace(' ', '', $texto);
    $texto = str_replace(['á','é','í','ó','ú'], ['a','e','i','o','u'], $texto);



    // Comparar el texto con su versión invertida
    return $texto === strrev($texto);
}

//Pruebas
echo "Introduce una cadena de texto para comprobar si es un palíndromo:\n";
echo "> ";
$texto = readline();
if(esPalindromo($texto) === true) {
    echo "La cadena '$texto' es un palíndromo.\n";
} elseif (esPalindromo($texto) === false) {
    echo "La cadena '$texto' no es un palíndromo.\n";
} else {
    echo esPalindromo($texto) . "\n";
}
?>
