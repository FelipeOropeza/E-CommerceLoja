<?php
    include 'conexao.php';

    $cd_prod = $_GET['cd'];

    $consultaComp = $cn->query("delete from tbl_compra where codigoProd = '$cd_prod'");
    $consultaProd = $cn->query("delete from tbl_produto where codigo = '$cd_prod'");
    header('location:exibeRig.php');
?>