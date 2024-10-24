<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page) ? $page: "Home";?></title>
</head>

<body>
    <?php
    // index.php
    require_once '../src/controllers/HomeController.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    $page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Página padrão

    $controler = new HomeController();

    $controler->render($page);

    exit;
    ?>
</body>

</html>