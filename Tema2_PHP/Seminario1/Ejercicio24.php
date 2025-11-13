<?php
//Ejercicio 24. Crea un programa que utilice constantes para definir diferentes tipos de descuentos (DESCUENTO_ESTUDIANTE, DESCUENTO_JUBILADO, DESCUENTO_VIP) y una
//función que calcule el precio final de un producto aplicando el descuento correspondiente según el tipo de cliente.

define("DESCUENTO_ESTUDIANTE", 0.15);
define("DESCUENTO_JUBILADO", 0.20);
define("DESCUENTO_VIP", 0.25);

function calcularPrecioFinal($precio, $tipoDescuento) {
    // Comprobar si el precio base es válido
    if (!is_numeric($precio) || $precio < 0) {
        return "Error: El precio base debe ser un número no negativo.";
    }

    // Determinar el descuento según el tipo de cliente
    switch ($tipoDescuento) {
        case 'ESTUDIANTE':
            $descuento = DESCUENTO_ESTUDIANTE;
            break;
        case 'JUBILADO':
            $descuento = DESCUENTO_JUBILADO;
            break;
        case 'VIP':
            $descuento = DESCUENTO_VIP;
            break;
        default:
            return "Error: Tipo de descuento no válido.";
    }

    // Calcular el precio final aplicando el descuento
    $precioFinal = $precio * (1 - $descuento);
    return $precioFinal;
}
//Pruebas
echo "Introduce el precio base del producto:\n";
echo "> ";
$precio = readline();
echo "Introduce el tipo de descuento (ESTUDIANTE, JUBILADO, VIP):\n";
echo "> ";
$tipoDescuento = readline();
$resultado = calcularPrecioFinal($precio, strtoupper($tipoDescuento));
if (is_string($resultado)) {
    echo $resultado . "\n";
} else {
    echo "El precio final del producto es: " . number_format($resultado, 2) . "\n";
}
?>