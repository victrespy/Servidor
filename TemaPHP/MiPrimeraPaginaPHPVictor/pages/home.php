<?php
    $nombre = "Victor";
    $apellido = "Trespando";
    $edad = 25;
    $ciudad = "Granada";
?>

<main>
    <section class="home">
        <h1>Welcome to the Home Page</h1>
        <p>This is the main content of the home page.</p>
        <p>La fecha de hoy es: <?php echo date("d/m/Y"); ?></p>
        <p>Mi nombre es <?php echo $nombre . " " . $apellido; ?>, tengo <?php echo $edad; ?> años y vivo en <?php echo $ciudad; ?>.</p>
    </section>
</main>
