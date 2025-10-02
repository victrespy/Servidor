<?php
/**
 * Configuración del Sistema de Navegación
 * Ejercicio 3: Sistema de Navegación Básico
 * 
 * @author Tu Nombre
 * @date 2025-09-28
 */

// Configuración de errores para desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Información del sitio
define('SITE_NAME', 'Portfolio DWES');
define('SITE_TAGLINE', 'Desarrollador Web Full Stack');
define('SITE_VERSION', '1.0.0');
define('SITE_AUTHOR', 'Tu Nombre');
define('SITE_EMAIL', 'tu@email.com');

// Configuración de URLs
define('BASE_URL', '/Web%202025/Teoria/Tema_1/Ejercicios_Ejemplo/ejercicio_3/');
define('ASSETS_URL', BASE_URL . 'assets/');

// Zona horaria
date_default_timezone_set('Europe/Madrid');

// Páginas disponibles con configuración completa
$pages = [
    'home' => [
        'title' => 'Inicio',
        'file' => 'pages/home.php',
        'icon' => 'home',
        'description' => 'Página principal con información de bienvenida',
        'keywords' => 'inicio, bienvenida, portfolio, desarrollador web',
        'show_in_menu' => true,
        'public' => true
    ],
    'about' => [
        'title' => 'Acerca de',
        'file' => 'pages/about.php',
        'icon' => 'user',
        'description' => 'Información personal y profesional',
        'keywords' => 'acerca de, perfil, experiencia, habilidades',
        'show_in_menu' => true,
        'public' => true
    ],
    'portfolio' => [
        'title' => 'Portfolio',
        'file' => 'pages/portfolio.php',
        'icon' => 'briefcase',
        'description' => 'Proyectos y trabajos realizados',
        'keywords' => 'portfolio, proyectos, trabajos, ejemplos',
        'show_in_menu' => true,
        'public' => true
    ],
    'blog' => [
        'title' => 'Blog',
        'file' => 'pages/blog.php',
        'icon' => 'book-open',
        'description' => 'Artículos y tutoriales de desarrollo web',
        'keywords' => 'blog, artículos, tutoriales, desarrollo web',
        'show_in_menu' => true,
        'public' => true
    ],
    'contact' => [
        'title' => 'Contacto',
        'file' => 'pages/contact.php',
        'icon' => 'mail',
        'description' => 'Información de contacto y formulario',
        'keywords' => 'contacto, email, teléfono, formulario',
        'show_in_menu' => true,
        'public' => true
    ]
];

// Página por defecto
define('DEFAULT_PAGE', 'home');

// Página de error 404
define('ERROR_404_PAGE', 'pages/404.php');

/**
 * Obtener página actual desde la URL
 * @return string
 */
function getCurrentPage() {
    global $pages;
    
    $page = $_GET['page'] ?? DEFAULT_PAGE;
    
    // Limpiar y validar página
    $page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);
    
    // Verificar si la página existe
    if (!isset($pages[$page])) {
        return '404';
    }
    
    // Verificar si la página es pública
    if (!$pages[$page]['public']) {
        return '404';
    }
    
    return $page;
}

/**
 * Obtener información de una página
 * @param string $page
 * @return array|null
 */
function getPageInfo($page) {
    global $pages;
    
    if ($page === '404') {
        return [
            'title' => 'Página no encontrada',
            'file' => ERROR_404_PAGE,
            'icon' => 'x-circle',
            'description' => 'La página solicitada no fue encontrada',
            'keywords' => '404, error, página no encontrada'
        ];
    }
    
    return $pages[$page] ?? null;
}

/**
 * Verificar si una página está activa
 * @param string $page
 * @param string $current
 * @return bool
 */
function isActivePage($page, $current) {
    return $page === $current;
}

/**
 * Generar URL para una página
 * @param string $page
 * @return string
 */
function pageUrl($page) {
    if ($page === DEFAULT_PAGE) {
        return BASE_URL;
    }
    return BASE_URL . '?page=' . urlencode($page);
}

/**
 * Generar título completo de la página
 * @param string $pageTitle
 * @return string
 */
function generatePageTitle($pageTitle = '') {
    if (empty($pageTitle)) {
        return SITE_NAME . ' - ' . SITE_TAGLINE;
    }
    return $pageTitle . ' - ' . SITE_NAME;
}

/**
 * Generar breadcrumbs para la página actual
 * @param string $currentPage
 * @return array
 */
function generateBreadcrumbs($currentPage) {
    global $pages;
    
    $breadcrumbs = [
        ['title' => 'Inicio', 'url' => pageUrl('home'), 'active' => false]
    ];
    
    if ($currentPage !== 'home' && $currentPage !== '404') {
        $pageInfo = getPageInfo($currentPage);
        if ($pageInfo) {
            $breadcrumbs[] = [
                'title' => $pageInfo['title'],
                'url' => pageUrl($currentPage),
                'active' => true
            ];
        }
    } elseif ($currentPage === '404') {
        $breadcrumbs[] = [
            'title' => 'Error 404',
            'url' => '',
            'active' => true
        ];
    } else {
        $breadcrumbs[0]['active'] = true;
    }
    
    return $breadcrumbs;
}

/**
 * Obtener páginas para el menú
 * @return array
 */
function getMenuPages() {
    global $pages;
    
    return array_filter($pages, function($page) {
        return $page['show_in_menu'] && $page['public'];
    });
}

/**
 * Generar clases CSS para navegación
 * @param string $page
 * @param string $current
 * @return string
 */
function getNavClasses($page, $current) {
    $baseClasses = 'flex items-center px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200';
    
    if (isActivePage($page, $current)) {
        return $baseClasses . ' bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200';
    }
    
    return $baseClasses . ' text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-700';
}

/**
 * Obtener icono SVG para una página
 * @param string $iconName
 * @return string
 */
function getIcon($iconName) {
    $icons = [
        'home' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>',
        
        'user' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>',
        
        'briefcase' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0H8m8 0v6a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0h2.5A2.5 2.5 0 0120.5 8.5V12a2.5 2.5 0 01-2.5 2.5H16"></path></svg>',
        
        'book-open' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
        
        'mail' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
        
        'x-circle' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        
        'menu' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>',
        
        'x' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
    ];
    
    return $icons[$iconName] ?? $icons['x-circle'];
}

/**
 * Limpiar output buffer y enviar headers
 */
function cleanOutput() {
    if (ob_get_level()) {
        ob_clean();
    }
    
    header('Content-Type: text/html; charset=UTF-8');
    header('X-Powered-By: PHP/' . PHP_VERSION);
}

// Meta información por defecto
$default_meta = [
    'viewport' => 'width=device-width, initial-scale=1.0',
    'charset' => 'UTF-8',
    'author' => SITE_AUTHOR,
    'generator' => 'PHP ' . PHP_VERSION,
    'robots' => 'index, follow'
];

// Configuración de tema (modo oscuro)
$theme_config = [
    'default_mode' => 'light', // 'light' o 'dark'
    'allow_toggle' => true,
    'storage_key' => 'dwes_theme_preference'
];
?>