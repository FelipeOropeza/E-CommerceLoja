<?php
    include 'conexao.php';

    $cd_prod = $_GET['cd'];
    $vProd = $_POST['txtprod'];
    $vPrec = $_POST['txtpreco'];
    $vCat = $_POST['cat'];

    $alterar = $cn->query("update tbl_produto set
    produto = '$vProd',
    preco = '$vPrec',
    cod_cad = '$vCat'
    where codigo = '$cd_prod';
    ");
    header('location:exibeRig.php');
?>