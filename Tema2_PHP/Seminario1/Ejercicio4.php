<?php
//Ejercicio 4. Crea una función que determine si una cadena de texto es un palíndromo.
//Nota: Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha que de derecha a izquierda, por ejemplo: "ana", "reconocer", "anilina".

function esPalindromo($texto) {
    // Comprobar si el texto está vacío o es null
    if (empty($texto)) {
        return "Error: No se ha proporcionado ningún texto";
    }

    // Comprobar si es una cadena de texto
    if (!is_string($texto)) {
        return "Error: El valor proporcionado no es una cadena de texto";
    }

    // Convertir a minúsculas y eliminar espacios, acentos y caracteres especiales
    $texto = strtolower($texto);
    $texto = trim($texto);
    $texto = str_replace(' ', '', $texto);
    $texto = str_replace(['á','é','í','ó','ú'], ['a','e','i','o','u'], $texto);
    $texto = preg_replace('/[^a-z0-9]/', '', $texto);

    // Si después de limpiar el texto está vacío
    if (empty($texto)) {
        return "Error: El texto solo contiene caracteres especiales";
    }

    // Comparar el texto con su versión invertida
    return $texto === strrev($texto);
}

// Ejemplos de uso
$pruebas = [
    "ana",                      // Palíndromo simple
    "Anita lava la tina",      // Palíndromo con espacios
    "No es palíndromo",        // No es palíndromo
    "Ána",                     // Palíndromo con acento
    "A man, a plan, a canal: Panama!", // Palíndromo con caracteres especiales
    "",                        // Cadena vacía
    null,                      // Null
    123,                       // Número
];

foreach ($pruebas as $prueba) {
    $resultado = esPalindromo($prueba);
    $textoMostrar = is_null($prueba) ? "null" : (is_string($prueba) ? "'$prueba'" : $prueba);
    echo "Texto: $textoMostrar -> ";
    if (is_bool($resultado)) {
        echo $resultado ? "Es palíndromo" : "No es palíndromo";
    } else {
        echo $resultado;
    }
    echo "\n";
}
?>
