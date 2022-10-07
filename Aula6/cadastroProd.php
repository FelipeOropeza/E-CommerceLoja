<?php
    include 'conexao.php';

    $vProd = $_POST['prod'];
    $vPrec = $_POST['preco'];
    $vCat = $_POST['cat'];
    $vQtd = $_POST['qtd'];
    
    $consulta = $cn->query("select codigo, produto, preco, qtd from tbl_produto where produto = '$vProd'");

    if($consulta->rowCount() == 0){
        $insert = $cn->query("
        insert into tbl_produto(produto, preco, qtd, cod_cad)
                     values('$vProd', '$vPrec', $vQtd, '$vCat');
        ");
        header('location:menuAdmis.php');
    }
    else{
        header('location:erro1.php');
    }
?>