<?php

$nombre = $_POST['name'] ?? 'Desconocido';

?>


<section class="contact">
    <h1>Contact Page</h1>
    <p>This is the contact page content.</p>
    <form action="" method="post">
        <label for="POST-name">Nombre:</label>
        <input id="POST-name" type="text" name="name" />
        <input type="submit" value="Save" />
    </form>

    <p>Hola, <?php echo htmlspecialchars($nombre); ?></p>
</section>

