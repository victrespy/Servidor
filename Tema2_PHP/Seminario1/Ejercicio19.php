<?php
//Ejercicio 19. Crea una función que, dada una cadena de texto, elimine todas las vocales de la cadena.

function eliminarVocales($cadena) {
    // Comprobar si la cadena es válida
    if (!is_string($cadena)) {
        return "Error: El parámetro debe ser una cadena de texto.";
    }

    $vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $resultado = str_replace($vocales, '', $cadena);

    return $resultado;
}
//Pruebas
echo "Introduce una cadena de texto:\n";
echo "> ";
$texto = readline();
$resultado = eliminarVocales($texto);
echo $resultado . "\n";
?>