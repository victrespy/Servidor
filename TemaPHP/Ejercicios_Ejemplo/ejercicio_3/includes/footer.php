<footer class="bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5><i class="fas fa-code text-primary"></i> Mi Sitio Web</h5>
                <p>Ejemplo de sitio web dinámico desarrollado con PHP, Bootstrap y sistema de navegación modular.</p>
            </div>
            
            <div class="col-md-4 mb-4">
                <h5>Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php?page=home" class="text-light">Inicio</a></li>
                    <li><a href="index.php?page=about" class="text-light">Sobre Nosotros</a></li>
                    <li><a href="index.php?page=services" class="text-light">Servicios</a></li>
                    <li><a href="index.php?page=contact" class="text-light">Contacto</a></li>
                </ul>
            </div>
            
            <div class="col-md-4 mb-4">
                <h5>Tecnologías</h5>
                <div class="mb-3">
                    <span class="badge bg-primary me-1">PHP</span>
                    <span class="badge bg-primary me-1">HTML5</span>
                    <span class="badge bg-primary me-1">CSS3</span>
                    <span class="badge bg-primary me-1">Bootstrap 5</span>
                    <span class="badge bg-primary me-1">JavaScript</span>
                </div>
            </div>
        </div>
        
        <hr class="my-4">
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">
                    &copy; <?php echo date('Y'); ?> Mi Sitio Web. Ejercicio práctico de DWES.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">
                    <i class="fas fa-heart text-danger"></i> 
                    Desarrollado con PHP <?php echo PHP_VERSION; ?>
                </p>
            </div>
        </div>
    </div>
</footer>