<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-code"></i> Mi Sitio Web
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page === 'home') ? 'active' : ''; ?>" href="index.php?page=home">
                            <i class="fas fa-home"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page === 'about') ? 'active' : ''; ?>" href="index.php?page=about">
                            <i class="fas fa-info-circle"></i> Sobre Nosotros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page === 'services') ? 'active' : ''; ?>" href="index.php?page=services">
                            <i class="fas fa-cogs"></i> Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page === 'contact') ? 'active' : ''; ?>" href="index.php?page=contact">
                            <i class="fas fa-envelope"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>