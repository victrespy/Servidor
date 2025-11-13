<?php
//Ejercicio 29. Crea un programa que convierta temperaturas entre Celsius, Fahrenheit y Kelvin. Utiliza constantes para las fórmulas de conversión y
// constantes mágicas de PHP (__FUNCTION__, __LINE__) para mostrar información de depuración.

define("C_TO_F_MULT", 9/5);
define("C_TO_F_SUM", 32);
define("C_TO_K_SUM", 273.15);
define("F_TO_C_MULT", 5/9);
define("F_TO_C_SUM", 32);
define("K_TO_C_SUM", 273.15);

function convertirTemperatura($valor, $de, $a) {

    // Convertir a Celsius primero
    switch (strtolower($de)) {
        case 'celsius':
            $celsius = $valor;
            break;
        case 'fahrenheit':
            $celsius = ($valor - F_TO_C_SUM) * F_TO_C_MULT;
            break;
        case 'kelvin':
            $celsius = $valor - K_TO_C_SUM;
            break;
        default:
            return "Error: Unidad de origen no válida.";
    }

    // Convertir de Celsius a la unidad deseada
    switch (strtolower($a)) {
        case 'celsius':
            return $celsius;
        case 'fahrenheit':
            return ($celsius * C_TO_F_MULT) + C_TO_F_SUM;
        case 'kelvin':
            return $celsius + C_TO_K_SUM;
        default:
            return "Error: Unidad de destino no válida.";
    }
}
//Pruebas
echo "Introduce el valor de la temperatura:\n";
echo "> ";
$temperatura = readline();
echo "Introduce la unidad de origen (celsius, fahrenheit, kelvin):\n";
echo "> ";
$de = readline();
echo "Introduce la unidad de destino (celsius, fahrenheit, kelvin):\n";
echo "> ";
$a = readline();
$resultado = convertirTemperatura($temperatura, $de, $a);
echo $resultado . "\n";

?>