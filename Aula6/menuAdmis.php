<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Loja</title>
</head>
<body>
<?php
    session_start();
    include 'conexao.php';
    include 'nav.php';
?>
<div class="container ">
    <form class="form form-control-sm" name="frmCadastroProd" method="post" action="alteraReg.php?cd=<?php echo $cd_codigo ?>">
        <div class="d-grid gap-1 col-3 mx-auto">
            <h4 class="text-center">Menu Administrativo</h4>
            <br>
            <a class="btn btn-primary" href="exibeRig.php" role="button">Exibe registro</a>
            <a class="btn btn-primary" href="exibeCom.php" role="button">Exibe compras</a>
            <a class="btn btn-primary" href="formProd.php" role="button">Cadastro de produto</a>
            <a class="btn btn-primary" href="formCat.php" role="button">Cadastro de categoria</a>
            <a class="btn btn-primary" href="exibeUsu.php" role="button">Lista de usuários</a>
            <a class="btn btn-primary" href="exibehist.php" role="button">Histórico de registros</a>
        </div>
    </form>
</div>
</body>
</html>