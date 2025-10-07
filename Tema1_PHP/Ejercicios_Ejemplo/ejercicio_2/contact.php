<?php
/**
 * Página de Contacto
 * Ejercicio 2: Información de contacto (sin formularios)
 */

// Incluir configuración
require_once 'config.php';

// Configuración de esta página
$page_title = 'Información de Contacto';
$page_subtitle = 'Encuentranos y mantente en contacto con nosotros';
$meta_description = 'Información de contacto, redes sociales y ubicación de nuestro proyecto DWES';
$show_breadcrumb = true;

// Información de contacto
$contact_info = [
    'email' => SITE_EMAIL,
    'telefono' => '+34 123 456 789',
    'direccion' => 'Calle Ejemplo, 123',
    'ciudad' => 'Madrid, España',
    'codigo_postal' => '28001'
];

$social_media = [
    'github' => [
        'url' => 'https://github.com',
        'icon' => 'bi-github',
        'name' => 'GitHub'
    ],
    'linkedin' => [
        'url' => 'https://linkedin.com',
        'icon' => 'bi-linkedin', 
        'name' => 'LinkedIn'
    ],
    'twitter' => [
        'url' => 'https://twitter.com',
        'icon' => 'bi-twitter',
        'name' => 'Twitter'
    ],
    'instagram' => [
        'url' => 'https://instagram.com',
        'icon' => 'bi-instagram',
        'name' => 'Instagram'
    ]
];

// Incluir header
include 'header.php';
?>

<!-- Contenido de la página -->
<div class="row">
    <div class="col-lg-8">
        <!-- Información principal -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-envelope-at"></i>
                            Información de Contacto
                        </h5>
                        
                        <div class="contact-item mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-container me-3">
                                    <i class="bi bi-envelope-fill text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Correo Electrónico</h6>
                                    <a href="mailto:<?= $contact_info['email'] ?>" class="text-decoration-none">
                                        <?= $contact_info['email'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-container me-3">
                                    <i class="bi bi-telephone-fill text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Teléfono</h6>
                                    <a href="tel:<?= str_replace(' ', '', $contact_info['telefono']) ?>" class="text-decoration-none">
                                        <?= $contact_info['telefono'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="icon-container me-3">
                                    <i class="bi bi-geo-alt-fill text-warning fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Dirección</h6>
                                    <p class="mb-0 text-muted">
                                        <?= $contact_info['direccion'] ?><br>
                                        <?= $contact_info['codigo_postal'] ?> <?= $contact_info['ciudad'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <!-- Mapa placeholder -->
                        <div class="map-placeholder bg-light rounded d-flex align-items-center justify-content-center" style="height: 250px;">
                            <div class="text-center text-muted">
                                <i class="bi bi-geo-alt display-1"></i>
                                <p class="mb-0">Mapa de Ubicación</p>
                                <small>Madrid, España</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Horarios de atención -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-clock"></i>
                    Horarios de Atención
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><strong>Lunes - Viernes</strong></td>
                                        <td>09:00 - 18:00</td>
                                        <td>
                                            <?php 
                                            $current_hour = (int)date('H');
                                            $current_day = date('N'); // 1 = Lunes, 7 = Domingo
                                            
                                            if ($current_day >= 1 && $current_day <= 5 && $current_hour >= 9 && $current_hour < 18): ?>
                                                <span class="badge bg-success">Abierto</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Cerrado</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sábados</strong></td>
                                        <td>10:00 - 14:00</td>
                                        <td>
                                            <?php if ($current_day == 6 && $current_hour >= 10 && $current_hour < 14): ?>
                                                <span class="badge bg-success">Abierto</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Cerrado</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Domingos</strong></td>
                                        <td>Cerrado</td>
                                        <td><span class="badge bg-secondary">Cerrado</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle"></i>
                            <strong>Nota:</strong> Durante el periodo de desarrollo del curso DWES, 
                            los horarios pueden variar. Te recomendamos contactarnos previamente.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Preguntas frecuentes -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-question-circle"></i>
                    Preguntas Frecuentes
                </h5>
            </div>
            <div class="card-body">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Cómo puedo contactaros?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Puedes contactarnos a través del correo electrónico <strong><?= $contact_info['email'] ?></strong> 
                                o llamarnos al teléfono <strong><?= $contact_info['telefono'] ?></strong>. 
                                También estamos disponibles en nuestras redes sociales.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Qué tecnologías utilizáis?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Trabajamos principalmente con <strong>PHP <?= PHP_VERSION ?></strong>, 
                                <strong>HTML5</strong>, <strong>CSS3</strong>, <strong>Bootstrap 5</strong> 
                                y <strong>JavaScript</strong>. También utilizamos herramientas como 
                                <strong>XAMPP</strong> y <strong>Docker</strong> para el desarrollo.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Ofrecéis soporte técnico?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, ofrecemos soporte técnico durante nuestros horarios de atención. 
                                Para consultas urgentes, puedes contactarnos por email y te responderemos 
                                en un plazo máximo de 24 horas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="col-lg-4">
        <!-- Redes sociales -->
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-share"></i>
                    Síguenos
                </h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <?php foreach($social_media as $platform => $data): ?>
                        <a href="<?= $data['url'] ?>" target="_blank" class="btn btn-outline-dark btn-sm">
                            <i class="bi <?= $data['icon'] ?>"></i>
                            <?= $data['name'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                
                <div class="mt-3 text-center">
                    <small class="text-muted">
                        <i class="bi bi-heart-fill text-danger"></i>
                        ¡Síguenos para estar al día!
                    </small>
                </div>
            </div>
        </div>
        
        <!-- Información adicional -->
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-info-square"></i>
                    Información Adicional
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h6>Idiomas</h6>
                    <span class="badge bg-primary me-1">Español</span>
                    <span class="badge bg-secondary me-1">Inglés</span>
                    <span class="badge bg-info">Catalán</span>
                </div>
                
                <div class="mb-3">
                    <h6>Tiempo de Respuesta</h6>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"></div>
                    </div>
                    <small class="text-muted">90% < 24 horas</small>
                </div>
                
                <div class="mb-0">
                    <h6>Satisfacción</h6>
                    <div class="d-flex justify-content-center">
                        <div class="text-warning fs-5">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                    </div>
                    <div class="text-center">
                        <small class="text-muted">4.5/5 - 127 valoraciones</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Estado del sistema -->
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="bi bi-activity"></i>
                    Estado del Sistema
                </h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Servidor Web</span>
                    <span class="badge bg-success">Operativo</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Base de Datos</span>
                    <span class="badge bg-success">Operativo</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>PHP</span>
                    <span class="badge bg-success">v<?= PHP_VERSION ?></span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>Última actualización</span>
                    <span class="badge bg-info"><?= date('H:i') ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// JavaScript personalizado para esta página
$custom_js = "
    // Actualizar estado del sistema cada 30 segundos
    function updateSystemStatus() {
        const timeElement = document.querySelector('.badge.bg-info');
        if (timeElement && timeElement.textContent.includes(':')) {
            timeElement.textContent = new Date().toLocaleTimeString('es-ES', {hour: '2-digit', minute: '2-digit'});
        }
    }
    
    setInterval(updateSystemStatus, 30000);
    
    // Animación de entrada para las tarjetas de contacto
    const contactItems = document.querySelectorAll('.contact-item');
    contactItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-20px)';
        setTimeout(() => {
            item.style.transition = 'all 0.5s ease';
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, index * 200);
    });
    
    // Tooltip para badges de estado
    const badges = document.querySelectorAll('.badge');
    badges.forEach(badge => {
        if (badge.textContent === 'Abierto') {
            badge.title = 'Actualmente disponible para consultas';
        } else if (badge.textContent === 'Cerrado') {
            badge.title = 'Fuera del horario de atención';
        }
    });
";

// Incluir footer
include 'footer.php';
?>