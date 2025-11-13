<?php
//Ejercicio 27. Crea una función que reciba un array asociativo que representa un usuario con datos anidados
//(dirección, teléfono, etc.) y utilice el operador nullsafe (?->) para acceder de forma segura a propiedades que podrían no existir, devolviendo un mensaje apropiado.

function obtenerTelefonoUsuario($usuario) {
    // Intentar acceder al teléfono utilizando el operador nullsafe
    $telefono = $usuario['telefono'] ?? null;
    if ($telefono?->numero) {
        return $telefono->numero;
    } else {
        return "El número de teléfono no está disponible.";
    }
}
//Pruebas
$usuario1 = [
    `nombre` => 'Ana',
    `direccion` => [
        'calle' => 'Gran Vía',
        'ciudad' => 'Madrid'
    ]
];
echo obtenerTelefonoUsuario($usuario1) . "\n";
?>