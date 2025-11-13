<?php
//Ejercicio 28. Crea un programa que simule una calculadora interactiva. El programa debe solicitar al usuario dos números y una operación (+, -, *, /)
// usando readline() o simulando entrada de datos, y mostrar el resultado. Debe validar que los números sean válidos y manejar la división por cero.

function calculadoraInteractiva() {
    // Solicitar el primer número
    echo "Introduce el primer número:\n";
    echo "> ";
    $input1 = readline();
    
    // Validar el primer número
    if (!is_numeric($input1)) {
        return "Error: El primer número no es válido.";
    }
    $numero1 = (float)$input1;

    // Solicitar el segundo número
    echo "Introduce el segundo número:\n";
    echo "> ";
    $input2 = readline();
    
    // Validar el segundo número
    if (!is_numeric($input2)) {
        return "Error: El segundo número no es válido.";
    }
    $numero2 = (float)$input2;

    // Solicitar la operación
    echo "Introduce la operación (+, -, *, /):\n";
    echo "> ";
    $operacion = readline();

    // Realizar la operación
    switch ($operacion) {
        case '+':
            $resultado = $numero1 + $numero2;
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            break;
        case '/':
            if ($numero2 == 0) {
                return "Error: División por cero no permitida.";
            }
            $resultado = $numero1 / $numero2;
            break;
        default:
            return "Error: Operación no válida.";
    }

    return "El resultado de $numero1 $operacion $numero2 es: $resultado";
}

// Pruebas
echo calculadoraInteractiva() . "\n";
?>