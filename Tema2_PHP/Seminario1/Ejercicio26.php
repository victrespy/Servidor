<?php
//Ejercicio 26. Crea una función que reciba un array asociativo con datos de usuario (nombre, email, edad, ciudad) y utilice el operador null coalescing (??)
// para asignar valores por defecto cuando algún campo esté ausente o sea null.

function completarDatosUsuario($usuario) {
    // Asignar valores por defecto utilizando el operador null coalescing
    $nombre = $usuario['nombre'] ?? 'Anomimo';
    $email = $usuario['email'] ?? 'sin-email@example.com';
    $edad = $usuario['edad'] ?? 18;
    $ciudad = $usuario['ciudad'] ?? 'Desconocida';
    return [
        'nombre' => $nombre,
        'email' => $email,
        'edad' => $edad,
        'ciudad' => $ciudad
    ];
}
//Pruebas
$usuario1 = ['nombre' => 'Juan', 'edad' => 25];
$usuario2 = [];
print_r(completarDatosUsuario($usuario1));
print_r(completarDatosUsuario($usuario2));
?>