<?php
/**
 * Página Acerca de
 * Ejercicio 2: Información sobre el proyecto y tecnologías
 */

// Incluir configuración
require_once 'config.php';

// Configuración de esta página
$page_title = 'Acerca del Proyecto';
$page_subtitle = 'Conoce más sobre este proyecto de desarrollo web';
$meta_description = 'Información detallada sobre el proyecto DWES con PHP, tecnologías utilizadas y objetivos de aprendizaje';
$show_breadcrumb = true;

// Incluir header
include 'header.php';
?>

<!-- Contenido de la página -->
<div class="row">
    <div class="col-lg-8">
        <!-- Descripción del proyecto -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-info-circle"></i>
                    Sobre este Proyecto
                </h5>
            </div>
            <div class="card-body">
                <p class="lead">
                    Este proyecto forma parte del <strong>Ejercicio 2</strong> del Tema 1 del curso 
                    <strong>Desarrollo Web en Entorno Servidor (DWES)</strong>.
                </p>
                
                <p>
                    El objetivo principal es demostrar la <strong>separación de código</strong> 
                    usando archivos PHP modulares, creando una estructura escalable y mantenible 
                    para proyectos web.
                </p>
                
                <h6>Características implementadas:</h6>
                <ul>
                    <li><strong>Estructura modular</strong>: Separación de header, footer y configuración</li>
                    <li><strong>Sistema de navegación</strong>: Menú dinámico con indicador de página activa</li>
                    <li><strong>Responsive design</strong>: Compatible con dispositivos móviles</li>
                    <li><strong>Framework CSS</strong>: Bootstrap 5 para diseño profesional</li>
                    <li><strong>Contenido dinámico</strong>: Información generada por PHP</li>
                </ul>
            </div>
        </div>
        
        <!-- Objetivos de aprendizaje -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-target"></i>
                    Objetivos de Aprendizaje
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <h6 class="text-primary">
                                <i class="bi bi-puzzle"></i>
                                Modularidad
                            </h6>
                            <p class="mb-0 small">
                                Aprender a separar el código en archivos reutilizables 
                                para facilitar el mantenimiento.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <h6 class="text-success">
                                <i class="bi bi-layers"></i>
                                Includes
                            </h6>
                            <p class="mb-0 small">
                                Dominar el uso de include, require y sus variantes 
                                para incluir archivos PHP.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <h6 class="text-warning">
                                <i class="bi bi-gear"></i>
                                Configuración
                            </h6>
                            <p class="mb-0 small">
                                Centralizar la configuración del sitio en un archivo 
                                dedicado para facilitar cambios.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <h6 class="text-info">
                                <i class="bi bi-phone"></i>
                                Responsive
                            </h6>
                            <p class="mb-0 small">
                                Crear interfaces que se adapten perfectamente 
                                a cualquier tamaño de pantalla.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Estructura de archivos -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-folder"></i>
                    Estructura de Archivos
                </h5>
            </div>
            <div class="card-body">
                <pre class="bg-light p-3 rounded"><code>ejercicio_2/
├── config.php      # Configuración del sitio
├── header.php      # Encabezado y navegación
├── footer.php      # Pie de página
├── index.php       # Página principal
├── about.php       # Esta página
├── contact.php     # Página de contacto
└── services.php    # Página de servicios</code></pre>
                
                <div class="mt-3">
                    <h6>Descripción de archivos:</h6>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th>Archivo</th>
                                    <th>Propósito</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>config.php</code></td>
                                    <td>Configuración global, constantes y funciones auxiliares</td>
                                </tr>
                                <tr>
                                    <td><code>header.php</code></td>
                                    <td>HTML head, navegación y estilos comunes</td>
                                </tr>
                                <tr>
                                    <td><code>footer.php</code></td>
                                    <td>Pie de página, scripts y cierre del HTML</td>
                                </tr>
                                <tr>
                                    <td><code>*.php</code></td>
                                    <td>Páginas individuales con contenido específico</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="col-lg-4">
        <!-- Información técnica -->
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-cpu"></i>
                    Información Técnica
                </h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <strong>PHP:</strong> v<?= PHP_VERSION ?>
                    </li>
                    <li class="mb-2">
                        <strong>Bootstrap:</strong> v5.3.0
                    </li>
                    <li class="mb-2">
                        <strong>Iconos:</strong> Bootstrap Icons
                    </li>
                    <li class="mb-2">
                        <strong>Servidor:</strong> <?= $_SERVER['SERVER_SOFTWARE'] ?? 'Apache' ?>
                    </li>
                    <li class="mb-2">
                        <strong>Creado:</strong> <?= date('d/m/Y') ?>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Funcionalidades -->
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-lightning"></i>
                    Funcionalidades
                </h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Navegación Dinámica</h6>
                            <span class="badge bg-success">✓</span>
                        </div>
                        <small>Menú generado automáticamente desde array de configuración</small>
                    </div>
                    
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Breadcrumbs</h6>
                            <span class="badge bg-success">✓</span>
                        </div>
                        <small>Navegación contextual opcional por página</small>
                    </div>
                    
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Meta Tags</h6>
                            <span class="badge bg-success">✓</span>
                        </div>
                        <small>SEO optimizado con meta descripción personalizable</small>
                    </div>
                    
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Hora Real</h6>
                            <span class="badge bg-success">✓</span>
                        </div>
                        <small>Actualización automática cada segundo</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Links útiles -->
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-link"></i>
                    Enlaces de Interés
                </h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="https://www.php.net/manual/es/" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-book"></i>
                        Manual de PHP
                    </a>
                    <a href="https://getbootstrap.com/docs/5.3/" target="_blank" class="btn btn-outline-info btn-sm">
                        <i class="bi bi-bootstrap"></i>
                        Bootstrap Docs
                    </a>
                    <a href="https://icons.getbootstrap.com/" target="_blank" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-palette"></i>
                        Bootstrap Icons
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// JavaScript personalizado para esta página
$custom_js = "
    // Efecto de escritura para el título
    function typeWriter(element, text, speed = 50) {
        let i = 0;
        element.innerHTML = '';
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        type();
    }
    
    // Animación de progress bars (si las hubiera)
    const progressBars = document.querySelectorAll('.progress-bar');
    progressBars.forEach(bar => {
        const width = bar.style.width || bar.getAttribute('aria-valuenow') + '%';
        bar.style.width = '0%';
        setTimeout(() => {
            bar.style.transition = 'width 2s ease-in-out';
            bar.style.width = width;
        }, 100);
    });
";

// Incluir footer
include 'footer.php';
?>