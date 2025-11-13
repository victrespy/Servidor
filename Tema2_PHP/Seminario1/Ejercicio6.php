<?php
//Ejercicio 6. Crea una función que cuente cuántas veces aparece una subcadena en un texto.

function contarSubcadena($texto, $subcadena) {
    // Comprobar si el texto está vacío o es null
    if (empty($texto)) {
        return "Error: El texto esta vacio";
    }

    // Comprobar si es una cadena de texto
    if ((int)$texto != 0) {
        return "Error: No has introducido un texto";
    }

    // Comprobar si la subcadena es vacía
    if (strlen($subcadena) == 0) {
        return "Error: La subcadena no puede estar vacía";
    }

    // Convertir a minúsculas
    $texto = strtolower($texto);
    $subcadena = strtolower($subcadena);

    // Contar las apariciones de la subcadena en el texto
    $contador = 0;
    $posicion = 0;
    while (($posicion = strpos($texto, $subcadena, $posicion)) !== false) { //strpos devuelve la posición de la primera aparición de una subcadena en una cadena, si le pasas un 3 parametro empieza a buscar desde esa posición
        $contador++;
        $posicion += strlen($subcadena);
    }

    return $contador;
}

//Pruebas
echo "Introduce una cadena de texto:\n";
echo "> ";
$texto = readline();
echo "Introduce una subcadena:\n";
echo "> ";
$subcadena = readline();
$resultado = contarSubcadena($texto, $subcadena);
if (is_int($resultado)) {
    echo "La subcadena '$subcadena' aparece $resultado veces en el texto.\n";
} else {
    echo $resultado . "\n";
}
?>