<?php

function analizarTexto($texto){
    $resultado = [];

    // Total de palabras
    $palabras = str_word_count(strtolower($texto), 1);
    $resultado['total_palabras'] = count($palabras);

    // Frecuencia de palabras
    $frecuencia_palabras = array_count_values($palabras);
    arsort($frecuencia_palabras);
    $resultado['frecuencia_palabras'] = $frecuencia_palabras;

    // Longitud promedio de palabras
    $longitudes = array_map('strlen', $palabras);
    $resultado['longitud_promedio'] = array_sum($longitudes) / count($longitudes);

    // Identificación de n-gramas (bigrams)
    $bigrams = [];
    for ($i = 0; $i < count($palabras) - 1; $i++) {
        $bigram = $palabras[$i] . ' ' . $palabras[$i + 1];
        if (isset($bigrams[$bigram])) {
            $bigrams[$bigram]++;
        } else {
            $bigrams[$bigram] = 1;
        }
    }
    arsort($bigrams);
    $resultado['bigrams'] = $bigrams;

    return $resultado;
}

// Pruebas
$texto = readline("Introduce un párrafo de texto: ");
$analisis = analizarTexto($texto);
echo "Total de palabras: " . $analisis['total_palabras'] . "\n";
echo "Frecuencia de palabras:\n";
foreach ($analisis['frecuencia_palabras'] as $palabra => $frecuencia) {
    echo "$palabra: $frecuencia\n";
}
echo "Longitud promedio de palabras: " . $analisis['longitud_promedio'] . "\n";
echo "Bigrams más comunes:\n";
foreach (array_slice($analisis['bigrams'], 0, 10) as $bigram => $frecuencia) {
    echo "$bigram: $frecuencia\n";
}
?>