<?php
require_once './config/config.php';



?>
<!doctype html>
<html lang=<?php echo LANG; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../assets/css/style.css">
    <title><?php echo $page_title; ?></title>
</head>
<body>

    <?php require './includes/header.php'; ?>

    <main>
        <?php require "./pages/{$page}.php"; ?>
    </main>

    <?php require './includes/footer.php'; ?>
</body>
</html>
 