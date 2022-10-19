<?php
    include 'conexao.php';

    session_start();

    $vLogin = $_POST['login'];
    $vSenha = $_POST['senha'];

    $consulta = $cn->query("select Codigo, Nome, Login, Senha, Acesso from tbl_usuario where Login = '$vLogin' and Senha = '$vSenha'");

    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        if($exibeUsuario['Acesso'] == 0){
            $_SESSION['ID'] = $exibeUsuario['Codigo'];
            $_SESSION['Status'] = 0;
            header('location:index.php');
        }
        else{
            $_SESSION['ID'] = $exibeUsuario['Codigo'];
            $_SESSION['Status'] = 1;
            header('location:index.php');
        }
    }
    else{
        header('location:erro.php');
    }

?>