<?php
//Ejercicio 1: Calculadora
function calculadora ($num1, $num2, $operacion) {
    try {
        $operacion = strtolower($operacion); // Pasar a minusculas para evitar errores

        if (!is_numeric($num1) || !is_numeric($num2)) { //Para ver que sean numeros
            throw new Exception("Error: Ambos valores deben ser numeros");
        }

        return match ($operacion) {
            'suma'              => $num1 + $num2,
            'resta'             => $num1 - $num2,
            'multiplicacion'    => $num1 * $num2,
            'division'          => ($num2 != 0) ? $num1 / $num2 : throw new Exception("Error: División por cero"),
            'potencia'          => pow($num1, $num2),
            'raiz_cuadrada' => ($num1 >= 0) ? sqrt($num1) : throw new Exception("Error: Raíz cuadrada de número negativo"),
            'modulo'        => $num1 % $num2,
            default         => throw new Exception("Error: Operación no válida"),
        };
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

//Pruebas
$num1 = readline("Numero 1: ");
$num2 = readline("Numero 2: ");
$operacion = readline("Operación (suma, resta, multiplicacion, division, potencia, raiz_cuadrada, modulo): ");
$resultado = calculadora($num1, $num2, $operacion);
echo "Resultado: " . $resultado . "\n";
?>