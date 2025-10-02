<?php
require_once 'config.php';

// Obtener la página solicitada
$page = $_GET['page'] ?? 'home';

var_dump($_GET);

//die();

// Lista de páginas válidas
$valid_pages = ['home', 'about', 'services', 'contact'];

// Verificar si la página es válida
if (!in_array($page, $valid_pages)) {
    $page = '404';
}

// Configurar título dinámico
$page_titles = [
    'home' => 'Inicio - Mi Sitio Web',
    'about' => 'Sobre Nosotros - Mi Sitio Web',
    'services' => 'Servicios - Mi Sitio Web',
    'contact' => 'Contacto - Mi Sitio Web',
    '404' => 'Página no encontrada - Mi Sitio Web'
];

$page_title = $page_titles[$page] ?? 'Mi Sitio Web';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .nav-link.active {
            background-color: rgba(255,255,255,0.2) !important;
            border-radius: 5px;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
        
        .content-section {
            padding: 60px 0;
        }
        
        footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0 20px 0;
            margin-top: 50px;
        }
        
        .card {
            transition: transform 0.2s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <?php include "pages/{$page}.php"; ?>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>