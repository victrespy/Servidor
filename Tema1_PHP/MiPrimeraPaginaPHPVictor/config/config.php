<?php
define('SITENAME', 'MiPrimeraPagina');
define('URL_BASE', 'http://localhost/MiPrimeraPaginaPHPVictor');
define('APPROOT', __DIR__ . '/../');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mi_primera_pagina');
define('TIMEZONE', 'Europe/Madrid');
define('LANG', 'es');

// Lista de páginas válidas
$valid_pages = ['home', 'about', 'services', 'contact'];

// Configurar título dinámico
$page_titles = [
    'home' => 'Inicio - Mi Sitio Web',
    'about' => 'Sobre Nosotros - Mi Sitio Web',
    'services' => 'Servicios - Mi Sitio Web',
    'contact' => 'Contacto - Mi Sitio Web',
    '404' => 'Página no encontrada - Mi Sitio Web'
];

// Obtener la página solicitada
$page = $_GET['page'] ?? 'home';

// Verificar si la página es válida
if (!in_array($page, $valid_pages)) {
    $page = '404';
}

$page_title = $page_titles[$page] ?? 'Mi Sitio Web';