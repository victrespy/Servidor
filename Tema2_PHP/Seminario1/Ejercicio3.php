<?php
//Ejercicio 3. Crea una función que dada una distancia en millas calcule su correspondiente en kilómetros.
//Nota: 1 milla = 1.60934 kilómetros

function convertirMillasAKilometros($millas) {
    // Comprobaciones necesarias
    if ($millas === null || $millas === '') {
        return "No hay ningún valor";
    }
    if (!is_numeric($millas)) {
        return "La distancia no es un número";
    }
    if ($millas < 0) {
        return "La distancia no puede ser negativa";
    }

    // Realizar la conversión y redondeo
    $kilometros = $millas * 1.60934;
    return round($kilometros, 2);
}


$pruebas = [5, "10", -3, "texto", null, ""];

foreach ($pruebas as $prueba) {
    $resultado = convertirMillasAKilometros($prueba);
    echo "Valor: " . $prueba . " -> Resultado: " . $resultado . "\n";
}
?>
