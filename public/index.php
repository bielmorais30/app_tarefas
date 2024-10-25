<?php
    // index.php
    require_once '../src/controllers/HomeController.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    $page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Página padrão

    $controller = new HomeController();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($page); // ucFirst deixa a primeira em maiusculo?></title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap');

        :root{
            --cor-primaria: #0b8770;
            --cor-secundaria: #ebe68d;
        }
        *body{
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <?php
    $controller->render($page);
    exit;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>