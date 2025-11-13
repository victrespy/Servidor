<?php

class Validador {
    public function validarEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Error: Email no válido.";
        }
        return "Email válido.";
    }

    public function validarNombre($nombre) {
        if (empty($nombre) || !preg_match("/^[a-zA-Z\s]+$/", $nombre) || strlen($nombre) < 2) {
            return "Error: Nombre no válido.";
        }
        return "Nombre válido.";
    }

    public function validarTelefono($telefono) {
        if (!preg_match("/^\+?[0-9]{7,15}$/", $telefono)) {
            return "Error: Teléfono no válido. Debe contener entre 7 y 15 numeros.";
        }
        return "Teléfono válido.";
    }

    public function validarContrasena($contrasena) {
        if (strlen($contrasena) < 8 ||
            !preg_match("/[A-Z]/", $contrasena) ||
            !preg_match("/[a-z]/", $contrasena) ||
            !preg_match("/[0-9]/", $contrasena)){
            return "Error: Contraseña no válida. Debe tener al menos 8 caracteres, incluyendo mayúsculas, minúsculas, números.";
        }
        return "Contraseña válida.";
    }
}

//Pruebas
$validador = new Validador();
$email = readline("Introduce tu email: ");
$nombre = readline("Introduce tu nombre: ");
$telefono = readline("Introduce tu teléfono: ");
$contrasena = readline("Introduce tu contraseña: ");
echo $validador->validarEmail($email) . "\n";
echo $validador->validarNombre($nombre) . "\n";
echo $validador->validarTelefono($telefono) . "\n";
echo $validador->validarContrasena($contrasena) . "\n";
?>