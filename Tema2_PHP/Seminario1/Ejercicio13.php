<?php
//Ejercicio 13. Crea una función que dada una cadena de texto con formato Emmet devuelva su correspondiente etiqueta HTML, teniendo en cuenta sólo los atributos de clase e id.

function emmetToHtml($emmet) {
    // Comprobar si la cadena es válida
    if (!is_string($emmet) || empty($emmet)) {
        return "Error: La entrada debe ser una cadena de texto no vacía.";
    }

    $tag = 'div'; // Etiqueta por defecto
    $id = '';
    $class = '';

    // Extraer el tag, id y clase usando expresiones regulares
    if (preg_match('/^([a-zA-Z][a-zA-Z0-9]*)?/', $emmet, $tagMatch)) {
        if (!empty($tagMatch[1])) {
            $tag = $tagMatch[1];
        }
    }

    if (preg_match('/#([a-zA-Z_][a-zA-Z0-9\-_]*)/', $emmet, $idMatch)) {
        $id = $idMatch[1];
    }

    if (preg_match_all('/\.([a-zA-Z_][a-zA-Z0-9\-_]*)/', $emmet, $classMatches)) {
        $class = implode(' ', $classMatches[1]);
    }

    // Construir la etiqueta HTML
    $html = "<$tag";
    if (!empty($id)) {
        $html .= " id=\"$id\"";
    }
    if (!empty($class)) {
        $html .= " class=\"$class\"";
    }
    $html .= "></$tag>";

    return $html;
}
//Pruebas
echo "Introduce una cadena Emmet:\n";
echo "> ";
$emmetInput = readline();
$resultado = emmetToHtml($emmetInput);
echo $resultado . "\n";
?>