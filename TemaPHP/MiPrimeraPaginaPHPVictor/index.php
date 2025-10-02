<?php
require_once './config/config.php';

// Obtener la página solicitada
$page = $_GET['page'] ?? 'home';
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
<!doctype html>
<html lang=<?php echo LANG; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../assets/css/style.css">
    <title><?php echo $page_title; ?></title>
</head>
<body>

    <?php require './includes/header.php'; ?>

    <main>
        <?php require "./pages/{$page}.php"; ?>
    </main>

    <?php require './includes/footer.php'; ?>
</body>
</html>
