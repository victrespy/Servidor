<?php
/**
 * Header del sitio web
 * Incluye navegación y elementos comunes del encabezado
 */

// Asegurar que config.php esté incluido
if (!defined('SITE_NAME')) {
    require_once 'config.php';
}

// Variables por defecto si no están definidas
$page_title = isset($page_title) ? $page_title : '';
$meta_description = isset($meta_description) ? $meta_description : $default_meta['description'];
$current_page = get_current_page();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($default_meta['keywords']) ?>">
    <meta name="author" content="<?= htmlspecialchars($default_meta['author']) ?>">
    
    <title><?= htmlspecialchars(generate_page_title($page_title)) ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --success-color: #198754;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .navbar-nav .nav-link.active {
            background-color: rgba(255,255,255,0.2);
            border-radius: 5px;
        }
        
        .main-content {
            background: rgba(255,255,255,0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin: 20px auto;
            padding: 30px;
            min-height: 70vh;
        }
        
        .page-header {
            border-bottom: 3px solid var(--primary-color);
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        
        .page-header h1 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .breadcrumb {
            background: none;
            padding: 0;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-primary {
            background: linear-gradient(45deg, var(--primary-color), #0056b3);
            border: none;
            border-radius: 25px;
            padding: 10px 25px;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .footer {
            background: rgba(0,0,0,0.8);
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-code-slash"></i>
                <?= SITE_NAME ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach($menu_items as $page => $title): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= is_active_page($page) ?>" href="<?= $page ?>">
                                <?php
                                // Iconos para cada página
                                $icons = [
                                    'index.php' => 'bi-house',
                                    'about.php' => 'bi-person-circle',
                                    'contact.php' => 'bi-envelope',
                                    'services.php' => 'bi-gear'
                                ];
                                $icon = isset($icons[$page]) ? $icons[$page] : 'bi-file-text';
                                ?>
                                <i class="bi <?= $icon ?>"></i>
                                <?= htmlspecialchars($title) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container">
        <div class="main-content">
            <?php if(isset($show_breadcrumb) && $show_breadcrumb): ?>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <?php if($current_page !== 'index.php'): ?>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= isset($menu_items[$current_page]) ? $menu_items[$current_page] : 'Página' ?>
                        </li>
                    <?php endif; ?>
                </ol>
            </nav>
            <?php endif; ?>
            
            <!-- Encabezado de página -->
            <?php if(isset($page_title) && $page_title): ?>
            <div class="page-header">
                <h1><?= htmlspecialchars($page_title) ?></h1>
                <?php if(isset($page_subtitle)): ?>
                    <p class="text-muted mb-0"><?= htmlspecialchars($page_subtitle) ?></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>