<section class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="mb-5">
                    <i class="fas fa-exclamation-triangle fa-5x text-warning mb-4"></i>
                    <h1 class="display-4 text-dark mb-4">¡Oops! Página no encontrada</h1>
                    <p class="lead text-muted mb-4">
                        Lo sentimos, pero la página que estás buscando no existe o ha sido movida.
                    </p>
                </div>
                
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h4 class="text-primary mb-4">¿Qué puedes hacer?</h4>
                        
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-home fa-2x text-primary me-3"></i>
                                    <div class="text-start">
                                        <h6 class="mb-1">Volver al inicio</h6>
                                        <small class="text-muted">Regresa a la página principal</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-search fa-2x text-success me-3"></i>
                                    <div class="text-start">
                                        <h6 class="mb-1">Navegar el sitio</h6>
                                        <small class="text-muted">Explora nuestras secciones</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info mb-4">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Error 404:</strong> Esta página implementa un manejo básico de errores usando PHP.
                        </div>
                        
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="index.php?page=home" class="btn btn-primary btn-lg">
                                <i class="fas fa-home"></i> Ir al Inicio
                            </a>
                            <a href="index.php?page=about" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-info-circle"></i> Sobre Nosotros
                            </a>
                            <a href="index.php?page=services" class="btn btn-outline-success btn-lg">
                                <i class="fas fa-cogs"></i> Servicios
                            </a>
                            <a href="index.php?page=contact" class="btn btn-outline-warning btn-lg">
                                <i class="fas fa-envelope"></i> Contacto
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5">
                    <h5 class="text-muted mb-3">Páginas más visitadas</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        <i class="fas fa-code text-primary"></i> Inicio
                                    </h6>
                                    <p class="card-text small">
                                        Conoce nuestro sistema de navegación dinámico
                                    </p>
                                    <a href="index.php?page=home" class="btn btn-sm btn-primary">Visitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        <i class="fas fa-cogs text-success"></i> Servicios
                                    </h6>
                                    <p class="card-text small">
                                        Descubre nuestras soluciones de desarrollo web
                                    </p>
                                    <a href="index.php?page=services" class="btn btn-sm btn-success">Visitar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 text-muted">
                    <small>
                        <i class="fas fa-clock"></i> 
                        Tiempo de respuesta del servidor: <?php echo round((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) * 1000, 2); ?>ms
                    </small>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-2px);
}
</style>