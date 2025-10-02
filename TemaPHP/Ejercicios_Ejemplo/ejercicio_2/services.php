<?php
/**
 * Página de Servicios
 * Ejercicio 2: Servicios y tecnologías que ofrecemos
 */

// Incluir configuración
require_once 'config.php';

// Configuración de esta página
$page_title = 'Nuestros Servicios';
$page_subtitle = 'Descubre las tecnologías y servicios que ofrecemos';
$meta_description = 'Servicios de desarrollo web con PHP, tecnologías modernas y herramientas para crear proyectos profesionales';
$show_breadcrumb = true;

// Array de servicios
$services = [
    [
        'id' => 1,
        'name' => 'Desarrollo PHP',
        'icon' => 'bi-code-slash',
        'color' => 'primary',
        'description' => 'Desarrollo de aplicaciones web robustas y escalables con PHP moderno.',
        'features' => ['PHP 8.x', 'Symfony Framework', 'Laravel', 'APIs RESTful'],
        'price' => 'Desde €500'
    ],
    [
        'id' => 2,
        'name' => 'Diseño Frontend',
        'icon' => 'bi-palette',
        'color' => 'success',
        'description' => 'Interfaces modernas y responsive usando las últimas tecnologías.',
        'features' => ['Bootstrap 5', 'CSS3', 'JavaScript ES6+', 'Responsive Design'],
        'price' => 'Desde €300'
    ],
    [
        'id' => 3,
        'name' => 'Base de Datos',
        'icon' => 'bi-database',
        'color' => 'warning',
        'description' => 'Diseño y optimización de bases de datos relacionales y NoSQL.',
        'features' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Optimización'],
        'price' => 'Desde €200'
    ],
    [
        'id' => 4,
        'name' => 'DevOps & Docker',
        'icon' => 'bi-gear-wide-connected',
        'color' => 'info',
        'description' => 'Contenedorización y despliegue automatizado de aplicaciones.',
        'features' => ['Docker Compose', 'CI/CD', 'Nginx', 'SSL/HTTPS'],
        'price' => 'Desde €400'
    ],
    [
        'id' => 5,
        'name' => 'Mantenimiento',
        'icon' => 'bi-tools',
        'color' => 'secondary',
        'description' => 'Mantenimiento continuo y actualizaciones de seguridad.',
        'features' => ['Monitorización', 'Backups', 'Updates', 'Soporte 24/7'],
        'price' => 'Desde €100/mes'
    ],
    [
        'id' => 6,
        'name' => 'Consultoría',
        'icon' => 'bi-lightbulb',
        'color' => 'danger',
        'description' => 'Asesoramiento técnico y arquitectura de software personalizada.',
        'features' => ['Análisis técnico', 'Arquitectura', 'Buenas prácticas', 'Code Review'],
        'price' => 'Desde €80/hora'
    ]
];

// Tecnologías que dominamos
$technologies = [
    'Backend' => [
        ['name' => 'PHP', 'level' => 95, 'color' => 'primary'],
        ['name' => 'Symfony', 'level' => 85, 'color' => 'success'],
        ['name' => 'Laravel', 'level' => 80, 'color' => 'danger'],
        ['name' => 'Node.js', 'level' => 70, 'color' => 'warning']
    ],
    'Frontend' => [
        ['name' => 'HTML5', 'level' => 95, 'color' => 'primary'],
        ['name' => 'CSS3', 'level' => 90, 'color' => 'info'],
        ['name' => 'JavaScript', 'level' => 85, 'color' => 'warning'],
        ['name' => 'Bootstrap', 'level' => 90, 'color' => 'secondary']
    ],
    'Base de Datos' => [
        ['name' => 'MySQL', 'level' => 90, 'color' => 'primary'],
        ['name' => 'PostgreSQL', 'level' => 75, 'color' => 'success'],
        ['name' => 'MongoDB', 'level' => 65, 'color' => 'info'],
        ['name' => 'Redis', 'level' => 70, 'color' => 'danger']
    ],
    'DevOps' => [
        ['name' => 'Docker', 'level' => 85, 'color' => 'primary'],
        ['name' => 'Git', 'level' => 90, 'color' => 'secondary'],
        ['name' => 'Linux', 'level' => 80, 'color' => 'success'],
        ['name' => 'Apache/Nginx', 'level' => 75, 'color' => 'warning']
    ]
];

// Incluir header
include 'header.php';
?>

<!-- Contenido de la página -->
<div class="row">
    <div class="col-12">
        <!-- Introducción -->
        <div class="text-center mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="lead">
                        Ofrecemos servicios completos de desarrollo web utilizando las tecnologías más modernas
                        y las mejores prácticas de la industria.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Grid de servicios -->
        <div class="row g-4 mb-5">
            <?php foreach($services as $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 service-card" data-service="<?= $service['id'] ?>">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi <?= $service['icon'] ?> display-1 text-<?= $service['color'] ?>"></i>
                            </div>
                            
                            <h5 class="card-title"><?= htmlspecialchars($service['name']) ?></h5>
                            <p class="card-text text-muted">
                                <?= htmlspecialchars($service['description']) ?>
                            </p>
                            
                            <!-- Características -->
                            <div class="mb-3">
                                <?php foreach($service['features'] as $feature): ?>
                                    <span class="badge bg-<?= $service['color'] ?> bg-opacity-10 text-<?= $service['color'] ?> me-1 mb-1">
                                        <?= htmlspecialchars($feature) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Precio -->
                            <div class="price mb-3">
                                <h6 class="text-<?= $service['color'] ?>">
                                    <?= htmlspecialchars($service['price']) ?>
                                </h6>
                            </div>
                            
                            <a href="contact.php" class="btn btn-<?= $service['color'] ?> btn-sm">
                                <i class="bi bi-arrow-right-circle"></i>
                                Contactar
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Tecnologías -->
<div class="row mb-5">
    <div class="col-12">
        <h3 class="text-center mb-4">
            <i class="bi bi-stack"></i>
            Nuestras Tecnologías
        </h3>
        
        <div class="row g-4">
            <?php foreach($technologies as $category => $techs): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0"><?= $category ?></h6>
                        </div>
                        <div class="card-body">
                            <?php foreach($techs as $tech): ?>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-medium"><?= $tech['name'] ?></span>
                                        <span class="small text-muted"><?= $tech['level'] ?>%</span>
                                    </div>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-<?= $tech['color'] ?>" 
                                             role="progressbar" 
                                             style="width: 0%" 
                                             data-width="<?= $tech['level'] ?>%">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Proceso de trabajo -->
<div class="row mb-5">
    <div class="col-12">
        <h3 class="text-center mb-4">
            <i class="bi bi-diagram-3"></i>
            Nuestro Proceso
        </h3>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="process-step">
                    <div class="step-icon mb-3">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-chat-dots fs-4"></i>
                        </div>
                    </div>
                    <h6>1. Consulta Inicial</h6>
                    <p class="text-muted small">
                        Analizamos tus necesidades y objetivos para crear la solución perfecta.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="process-step">
                    <div class="step-icon mb-3">
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-pencil-square fs-4"></i>
                        </div>
                    </div>
                    <h6>2. Planificación</h6>
                    <p class="text-muted small">
                        Diseñamos la arquitectura y planificamos cada fase del desarrollo.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="process-step">
                    <div class="step-icon mb-3">
                        <div class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-code-slash fs-4"></i>
                        </div>
                    </div>
                    <h6>3. Desarrollo</h6>
                    <p class="text-muted small">
                        Implementamos la solución usando las mejores prácticas y tecnologías.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="process-step">
                    <div class="step-icon mb-3">
                        <div class="rounded-circle bg-info text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-rocket-takeoff fs-4"></i>
                        </div>
                    </div>
                    <h6>4. Despliegue</h6>
                    <p class="text-muted small">
                        Lanzamos tu proyecto y proporcionamos soporte continuo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonios simulados -->
<div class="row mb-5">
    <div class="col-12">
        <h3 class="text-center mb-4">
            <i class="bi bi-chat-quote"></i>
            Lo Que Dicen Nuestros Clientes
        </h3>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">
                            "Excelente trabajo con PHP y Symfony. El proyecto se completó a tiempo y superó nuestras expectativas."
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="bi bi-person"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">María García</h6>
                                <small class="text-muted">CEO, TechStart</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <p class="card-text">
                            "La implementación con Docker nos permitió desplegar fácilmente. Muy profesional y eficiente."
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="bi bi-person"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Carlos Ruiz</h6>
                                <small class="text-muted">CTO, WebSolutions</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">
                            "El diseño responsive y la integración con Bootstrap quedó perfecta. ¡Totalmente recomendado!"
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-info text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="bi bi-person"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Ana López</h6>
                                <small class="text-muted">Fundadora, DesignStudio</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row">
    <div class="col-12">
        <div class="card bg-primary text-white">
            <div class="card-body text-center py-5">
                <h3>¿Listo para comenzar tu proyecto?</h3>
                <p class="lead mb-4">
                    Contactanos hoy mismo y recibe una consulta gratuita personalizada.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="contact.php" class="btn btn-light btn-lg">
                        <i class="bi bi-envelope"></i>
                        Contactar Ahora
                    </a>
                    <a href="about.php" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-info-circle"></i>
                        Conoce Más
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// JavaScript personalizado para esta página
$custom_js = "
    // Animación de barras de progreso
    function animateProgressBars() {
        const progressBars = document.querySelectorAll('.progress-bar');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const width = bar.getAttribute('data-width');
                    
                    setTimeout(() => {
                        bar.style.transition = 'width 1.5s ease-in-out';
                        bar.style.width = width;
                    }, 200);
                    
                    observer.unobserve(bar);
                }
            });
        }, { threshold: 0.5 });
        
        progressBars.forEach(bar => observer.observe(bar));
    }
    
    // Animación de tarjetas de servicio
    function animateServiceCards() {
        const cards = document.querySelectorAll('.service-card');
        
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 150);
        });
    }
    
    // Efecto hover en tarjetas de servicio
    function addHoverEffects() {
        const cards = document.querySelectorAll('.service-card');
        
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-10px)';
                card.style.boxShadow = '0 15px 35px rgba(0,0,0,0.1)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = '';
            });
        });
    }
    
    // Contador animado para estadísticas
    function animateCounters() {
        const counters = document.querySelectorAll('[data-count]');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            let current = 0;
            const increment = target / 100;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }
    
    // Inicializar todas las animaciones
    window.addEventListener('load', () => {
        animateProgressBars();
        animateServiceCards();
        addHoverEffects();
    });
    
    // Smooth scroll para navegación interna
    document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
";

// Incluir footer
include 'footer.php';
?>