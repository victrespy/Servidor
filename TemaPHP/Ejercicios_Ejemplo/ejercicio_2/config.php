<?php
/**
 * Configuración del Sitio Web
 * Ejercicio 2: Página con Múltiples Archivos
 * 
 * @author Tu Nombre
 * @date 2025-09-28
 */

// Configuración de errores para desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Información del sitio
define('SITE_NAME', 'Mi Sitio Web DWES');
define('SITE_VERSION', '1.0.0');
define('SITE_AUTHOR', 'Estudiante DWES');
define('SITE_EMAIL', 'estudiante@ejemplo.com');

// Configuración de rutas
define('BASE_URL', '/Web%202025/Teoria/Tema_1/Ejercicios_Ejemplo/ejercicio_2/');
define('ASSETS_URL', BASE_URL . 'assets/');

// Menú de navegación
$menu_items = [
    'index.php' => 'Inicio',
    'about.php' => 'Acerca de',
    'contact.php' => 'Contacto',
    'services.php' => 'Servicios'
];

// Función para obtener la página actual
function get_current_page() {
    return basename($_SERVER['PHP_SELF']);
}

// Función para verificar si una página está activa
function is_active_page($page) {
    return get_current_page() === $page ? 'active' : '';
}

// Función para generar título de página
function generate_page_title($page_title = '') {
    return $page_title ? $page_title . ' - ' . SITE_NAME : SITE_NAME;
}

// Meta información por defecto
$default_meta = [
    'description' => 'Sitio web de ejemplo creado con PHP para el curso DWES',
    'keywords' => 'PHP, desarrollo web, DWES, ejemplo, tutorial',
    'author' => SITE_AUTHOR
];

// Zona horaria
date_default_timezone_set('Europe/Madrid');
?>