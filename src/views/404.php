<?php

// 404.php
if(!isset($_SESSION)){
    session_start();
}
$errorMessage = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : 'Página não encontrada.';
unset($_SESSION['error_message']); // Limpa a mensagem após exibir

echo "<h1>Erro 404</h1>";
echo "<p>$errorMessage</p>";
