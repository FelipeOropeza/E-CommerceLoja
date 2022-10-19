<?php
    include 'conexao.php';

    $vProd = $_POST['prod'];
    $vPrec = $_POST['preco'];
    $vQtd = $_POST['qtd'];

    $consulta = $cn->query("call spInsertComp('$vProd', '$vQtd');");
    header('location:index.php')
?>