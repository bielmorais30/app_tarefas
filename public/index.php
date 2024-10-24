<?php
// index.php
require_once '../src/controllers/HomeController.php';

if(!isset($_SESSION)){
    session_start();
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Página padrão

$controler = new HomeController();

$controler->render($page);

exit;