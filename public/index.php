<?php
// index.php
if(!isset($_SESSION)){
    session_start();
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Página padrão

// Cria um caminho seguro
$filePath = __DIR__ . '/../src/views/' . $page . '.php';

if (file_exists($filePath)) {
    include $filePath;
} else {
    // Página não encontrada, pode incluir uma página de erro
    $_SESSION['error_message'] = "A página {$filePath} não foi encontrada.";
    include __DIR__ . '/../src/views/404.php';
}
