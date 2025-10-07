# 🎯 Ejercicio 3: Sistema de Navegación Básico

## Descripción del Ejercicio

Este ejercicio implementa un **sistema de navegación dinámico** con múltiples páginas, navegación automática y manejo básico de errores.

## Características Implementadas

### ✅ Navegación Dinámica
- Menú generado automáticamente desde array de configuración
- Indicador visual de página activa
- Iconos personalizados para cada página

### ✅ Manejo de Rutas
- Sistema básico de rutas usando parámetro GET
- Página 404 para rutas no encontradas
- Redirecciones automáticas

### ✅ Diseño Responsive
- Framework Tailwind CSS
- Adaptable a dispositivos móviles
- Modo oscuro/claro

### ✅ Funcionalidades Avanzadas
- Breadcrumbs dinámicos
- Metadatos SEO optimizados
- JavaScript para interactividad

## Estructura de Archivos

```
ejercicio_3/
├── index.php           # Controlador principal
├── config.php          # Configuración y rutas
├── includes/
│   ├── header.php      # Header común
│   ├── footer.php      # Footer común
│   └── navigation.php  # Sistema de navegación
├── pages/
│   ├── home.php        # Página de inicio
│   ├── about.php       # Acerca de
│   ├── portfolio.php   # Portfolio
│   ├── blog.php        # Blog
│   ├── contact.php     # Contacto
│   └── 404.php         # Página de error
└── assets/
    ├── css/
    ├── js/
    └── images/
```

## Tecnologías Utilizadas

- **PHP 8.x**
- **Tailwind CSS 3.x**
- **JavaScript ES6+**
- **HTML5 Semántico**

## Instrucciones de Instalación

1. Copiar todos los archivos al directorio web
2. Asegurar que Apache/XAMPP esté funcionando
3. Acceder a `http://localhost/ruta/ejercicio_3/`

## URL de Ejemplo

- Inicio: `?page=home`
- Acerca de: `?page=about`
- Portfolio: `?page=portfolio`
- Blog: `?page=blog`
- Contacto: `?page=contact`

---

*Ejercicio creado para DWES 2025 - Tema 1*