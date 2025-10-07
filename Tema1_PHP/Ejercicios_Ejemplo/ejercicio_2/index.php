<?php
/**
 * Página Principal - Index
 * Ejercicio 2: Página con Múltiples Archivos
 */

// Incluir configuración
require_once 'config.php';

// Configuración de esta página
$page_title = 'Bienvenido';
$page_subtitle = 'Página principal de nuestro sitio web';
$meta_description = 'Página de inicio del sitio web de ejemplo DWES con PHP y Bootstrap';
$show_breadcrumb = false;

// Incluir header
include 'header.php';
?>

<!-- Contenido de la página principal -->
<div class="row" xmlns:http="http://www.w3.org/1999/xhtml">
    <div class="col-12">
        <!-- Banner principal -->
        <div class="text-center mb-5">
            <div class="p-5 bg-primary text-white rounded-3 position-relative overflow-hidden">
                <div class="position-relative z-index-2">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="bi bi-rocket-takeoff"></i>
                        Bienvenido a PHP
                    </h1>
                    <p class="lead mb-4">
                        Descubre el poder del desarrollo web del lado del servidor con PHP y Bootstrap
                    </p>
                    <a href="about.php" class="btn btn-light btn-lg">
                        <i class="bi bi-arrow-right-circle"></i>
                        Conoce más
                    </a>
                </div>
                <!-- Decoración de fondo -->
                <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25">
                    <div style="background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"grid\" width=\"10\" height=\"10\" patternUnits=\"userSpaceOnUse\"><path d=\"M 10 0 L 0 0 0 10\" fill=\"none\" stroke=\"white\" stroke-width=\"0.5\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23grid)\"/></rect></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cards de información -->
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-code-slash display-1 text-primary"></i>
                </div>
                <h5 class="card-title">Desarrollo PHP</h5>
                <p class="card-text">
                    Aprende PHP desde cero con ejemplos prácticos y ejercicios interactivos.
                    Perfecto para principiantes en desarrollo web.
                </p>
                <a href="about.php" class="btn btn-outline-primary">
                    <i class="bi bi-book"></i>
                    Más información
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-bootstrap display-1 text-success"></i>
                </div>
                <h5 class="card-title">Bootstrap Framework</h5>
                <p class="card-text">
                    Integración perfecta con Bootstrap para crear interfaces modernas y responsivas
                    de forma rápida y eficiente.
                </p>
                <a href="services.php" class="btn btn-outline-success">
                    <i class="bi bi-palette"></i>
                    Ver servicios
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-people display-1 text-warning"></i>
                </div>
                <h5 class="card-title">Comunidad</h5>
                <p class="card-text">
                    Únete a nuestra comunidad de desarrolladores y comparte conocimientos
                    sobre desarrollo web con PHP.
                </p>
                <a href="contact.php" class="btn btn-outline-warning">
                    <i class="bi bi-chat-dots"></i>
                    Contactar
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Estadísticas del sitio -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title mb-4">
                    <i class="bi bi-graph-up"></i>
                    Información del Sistema
                </h5>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="border-end">
                            <h3 class="text-primary mb-1"><?= PHP_VERSION ?></h3>
                            <small class="text-muted">Versión PHP</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border-end">
                            <h3 class="text-success mb-1"><?= count($menu_items) ?></h3>
                            <small class="text-muted">Páginas</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border-end">
                            <h3 class="text-warning mb-1"><?= date('H:i') ?></h3>
                            <small class="text-muted">Hora actual</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3 class="text-info mb-1"><?= date('d/m') ?></h3>
                        <small class="text-muted">Fecha</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Código de ejemplo -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">
                    <i class="bi bi-terminal"></i>
                    Ejemplo de Código PHP
                </h5>
            </div>
            <div class="card-body">
                <pre><code class="language-php">&lt;?php
// Ejemplo básico de PHP
$mensaje = "¡Hola desde PHP!";
$fecha = date('Y-m-d H:i:s');

echo $mensaje;
echo "Fecha actual: " . $fecha;

// Array de tecnologías
$tecnologias = ['PHP', 'HTML', 'CSS', 'Bootstrap', 'JavaScript'];

foreach($tecnologias as $tech) {
    echo "- " . $tech . "\n";
}
?&gt;</code></pre>
                <div class="mt-3">
                    <small class="text-muted">
                        <i class="bi bi-info-circle"></i>
                        Este es un ejemplo del código PHP que utilizamos en esta página
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Características -->
<div class="row">
    <div class="col-12">
        <h3 class="mb-4">
            <i class="bi bi-star"></i>
            Características de este Proyecto
        </h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="bi bi-check-circle-fill text-success fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6>Estructura Modular</h6>
                        <p class="text-muted mb-0">
                            Separación clara entre configuración, header y footer
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="bi bi-check-circle-fill text-success fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6>Responsive Design</h6>
                        <p class="text-muted mb-0">
                            Perfectamente adaptado a dispositivos móviles
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="bi bi-check-circle-fill text-success fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6>Bootstrap 5</h6>
                        <p class="text-muted mb-0">
                            Framework CSS moderno y componentes avanzados
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="bi bi-check-circle-fill text-success fs-4"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6>PHP Dinámico</h6>
                        <p class="text-muted mb-0">
                            Contenido generado dinámicamente del lado del servidor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// JavaScript personalizado para esta página
$custom_js = "
    // Animación de contadores
    function animateCounters() {
        const counters = document.querySelectorAll('h3');
        counters.forEach(counter => {
            if (counter.textContent.match(/^\d+$/)) {
                const target = parseInt(counter.textContent);
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 20);
            }
        });
    }
    
    // Ejecutar animación al cargar
    window.addEventListener('load', animateCounters);
";

// Incluir footer
include 'footer.php';
?>