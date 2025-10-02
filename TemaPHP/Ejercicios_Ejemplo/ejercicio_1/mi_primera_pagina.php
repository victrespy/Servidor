<?php
/**
 * Ejercicio 1: Mi Primera Página PHP
 * Página personal básica con información dinámica
 * 
 * @author Tu Nombre
 * @date 2025-09-28
 */

// Configuración de errores para desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variables con información personal
$nombre = "Juan Pérez";
$edad = 22;
$ciudad = "Madrid";
$profesion = "Estudiante de Desarrollo Web";
$hobbies = ["Programar", "Leer", "Videojuegos", "Deportes"];

// Variables de fecha y tiempo
$fecha_actual = date('d/m/Y');
$hora_actual = date('H:i:s');
$dia_semana = date('l');

// Traducir día de la semana al español
$dias_espanol = [
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes', 
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo'
];
$dia_espanol = $dias_espanol[$dia_semana];

// Variable para mensaje dinámico
$saludo = "¡Bienvenido a mi página personal!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre; ?> - Mi Página Personal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 90%;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #667eea;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #666;
            font-size: 1.2em;
        }
        
        .info-section {
            margin: 25px 0;
        }
        
        .info-section h2 {
            color: #764ba2;
            margin-bottom: 15px;
            border-left: 4px solid #667eea;
            padding-left: 10px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .info-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }
        
        .info-card h3 {
            color: #667eea;
            margin-bottom: 10px;
        }
        
        .hobbies-list {
            list-style: none;
        }
        
        .hobbies-list li {
            background: #667eea;
            color: white;
            margin: 5px 0;
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-right: 10px;
            font-size: 0.9em;
        }
        
        .datetime {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }
        
        .datetime h3 {
            margin-bottom: 10px;
        }
        
        .datetime-info {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        
        .datetime-item {
            text-align: center;
            margin: 5px;
        }
        
        .datetime-item strong {
            display: block;
            font-size: 1.2em;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 2em;
            }
            
            .datetime-info {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo $nombre; ?></h1>
            <p><?php echo $saludo; ?></p>
        </div>
        
        <div class="info-grid">
            <div class="info-card">
                <h3>📋 Información Personal</h3>
                <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
                <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
                <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
                <p><strong>Profesión:</strong> <?php echo $profesion; ?></p>
            </div>
            
            <div class="info-card">
                <h3>🎯 Mis Hobbies</h3>
                <ul class="hobbies-list">
                    <?php foreach($hobbies as $hobby): ?>
                        <li><?php echo $hobby; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <div class="datetime">
            <h3>📅 Información Actual</h3>
            <div class="datetime-info">
                <div class="datetime-item">
                    <span>Día</span>
                    <strong><?php echo $dia_espanol; ?></strong>
                </div>
                <div class="datetime-item">
                    <span>Fecha</span>
                    <strong><?php echo $fecha_actual; ?></strong>
                </div>
                <div class="datetime-item">
                    <span>Hora</span>
                    <strong><?php echo $hora_actual; ?></strong>
                </div>
            </div>
        </div>
        
        <div class="info-section">
            <h2>💻 Sobre este ejercicio</h2>
            <p>Esta página fue creada como parte del <strong>Ejercicio 1</strong> del Tema 1 de DWES. 
            Demuestra el uso básico de PHP para mostrar información dinámica, incluyendo:</p>
            <ul style="margin: 10px 0 0 20px;">
                <li>Variables PHP para almacenar datos</li>
                <li>Funciones de fecha y tiempo</li>
                <li>Bucles foreach para mostrar arrays</li>
                <li>Integración de PHP con HTML y CSS</li>
            </ul>
        </div>
    </div>
    
    <script>
        // Pequeño script para actualizar la hora cada segundo
        function actualizarHora() {
            const ahora = new Date();
            const hora = ahora.toLocaleTimeString('es-ES');
            // Encontrar el elemento de hora y actualizarlo
            const horaElements = document.querySelectorAll('.datetime-item strong');
            if (horaElements.length >= 3) {
                horaElements[2].textContent = hora;
            }
        }
        
        // Actualizar cada segundo
        setInterval(actualizarHora, 1000);
    </script>
</body>
</html>