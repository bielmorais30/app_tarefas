<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "app_tarefas");

$mysqli = new mysqli(HOST, USER, PASSWORD, DBNAME);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados ".$mysqli->error);
}