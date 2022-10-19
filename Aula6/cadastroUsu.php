<?php
    include 'conexao.php';

    $vNome = $_POST['nome'];
    $vEmail = $_POST['email'];
    $vSenha = $_POST['senha'];

    $cadastro = $cn->query("insert into tbl_usuario values(default, '$vNome', '$vEmail', '$vSenha', default)");
    header('location:login.php');
?>