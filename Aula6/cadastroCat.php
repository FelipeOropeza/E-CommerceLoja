<?php

    include 'conexao.php';

    $vCat = $_POST['cat'];

    $consulta = $cn->query("select cd_cad, categoria from tbl_categoria where categoria = '$vCat'");

    if($consulta->rowCount() == 0){
        $inserir = $cn->query("insert into tbl_categoria(categoria) values('$vCat');");
        header('location:menuAdmis.php');
    }
    else{
        header('location:erro1.php');
    }
?>