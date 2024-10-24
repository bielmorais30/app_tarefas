<?php
    if(!isset($_SESSION)){
        session_start();
    }

    class HomeController{

        public $validPages = ["home", "painel", "404"];

        public function render($page){

            $page = in_array($page, $this->validPages) ? $page : '404';
            $filePath = __DIR__."\../views/{$page}.php";

            if(file_exists($filePath)){
                include $filePath;
            }else{
                $_SESSION['error_message'] = "A página {$filePath} não foi encontrada.";
                include __DIR__."\../views/404.php";
            }

            exit;
        }
    }