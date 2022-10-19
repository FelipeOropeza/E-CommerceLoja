<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'kiraFE22022006';
    $banco = 'BD_A';

    $cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>
