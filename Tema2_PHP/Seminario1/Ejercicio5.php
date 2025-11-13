<?php
//Ejercicio 5. Crea una función que cuente cuántas veces aparece una letra en un texto.

function contarLetra($texto, $letra) {
    // Comprobar si el texto está vacío o es null
    if (empty($texto)) {
        return "Error: El texto esta vacio";
    }

    // Comprobar si es una cadena de texto
    if ((int)$texto != 0) {
        return "Error: No has introducido un texto";
    }

    // Comprobar si la letra es un solo carácter
    if (strlen($letra) != 1) {
        return "Error: Solo puedes introducir una letra";
    }

    // Convertir a minúsculas
    $texto = strtolower($texto);
    $letra = strtolower($letra);

    // Contar las apariciones de la letra en el texto
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] === $letra) {
            $contador++;
        }
    }

    return $contador;
}

//Pruebas
echo "Introduce una cadena de texto:\n";
echo "> ";
$texto = readline();
echo "Introduce una letra:\n";
echo "> ";
$letra = readline();

$resultado = contarLetra($texto, $letra);
if (is_int($resultado)) {
    echo "La letra '$letra' aparece $resultado veces en el texto.\n";
} else {
    echo $resultado . "\n";
}

?>