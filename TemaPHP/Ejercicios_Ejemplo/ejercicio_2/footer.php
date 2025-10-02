        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="bi bi-code-slash"></i> <?= SITE_NAME ?></h5>
                    <p class="mb-2">Proyecto de ejemplo para el curso DWES 2025</p>
                    <p class="mb-0">
                        <small>
                            <i class="bi bi-person-badge"></i>
                            Creado por <?= SITE_AUTHOR ?>
                        </small>
                    </p>
                </div>
                
                <div class="col-md-3">
                    <h6>Enlaces Rápidos</h6>
                    <ul class="list-unstyled">
                        <?php foreach($menu_items as $page => $title): ?>
                            <li>
                                <a href="<?= $page ?>" class="text-light text-decoration-none">
                                    <?= htmlspecialchars($title) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="col-md-3">
                    <h6>Información</h6>
                    <ul class="list-unstyled">
                        <li>
                            <i class="bi bi-calendar"></i>
                            <?= date('d/m/Y') ?>
                        </li>
                        <li>
                            <i class="bi bi-clock"></i>
                            <?= date('H:i:s') ?>
                        </li>
                        <li>
                            <i class="bi bi-server"></i>
                            PHP <?= PHP_VERSION ?>
                        </li>
                        <li>
                            <i class="bi bi-tag"></i>
                            v<?= SITE_VERSION ?>
                        </li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-3">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">
                        <small>
                            &copy; <?= date('Y') ?> <?= SITE_NAME ?>. 
                            Desarrollado con <i class="bi bi-heart-fill text-danger"></i> 
                            usando PHP y Bootstrap.
                        </small>
                    </p>
                </div>
                
                <div class="col-md-6 text-end">
                    <small class="text-muted">
                        <i class="bi bi-code-square"></i>
                        Tema 1 - Ejercicio 2 | DWES 2025
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script personalizado -->
    <script>
        // Actualizar hora en tiempo real
        function actualizarHora() {
            const ahora = new Date();
            const hora = ahora.toLocaleTimeString('es-ES');
            const fechaElement = document.querySelector('.bi-clock').parentElement;
            if (fechaElement) {
                fechaElement.innerHTML = '<i class="bi bi-clock"></i> ' + hora;
            }
        }

        // Actualizar cada segundo
        setInterval(actualizarHora, 1000);
        
        // Efecto smooth scroll para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Animación de entrada para cards
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });
        
        // Observar todas las cards
        document.querySelectorAll('.card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
    
    <?php if(isset($custom_js)): ?>
        <!-- JavaScript personalizado de la página -->
        <script><?= $custom_js ?></script>
    <?php endif; ?>
</body>
</html>