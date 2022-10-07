<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alteração</title>
</head>
<body>
    <?php
    session_start();
    include 'conexao.php';
    include 'nav.php';

    $cd_codigo = $_GET['cd'];
    $cat_codigo = $_GET['cat'];

    $consultaCat = $cn->query("select cd_cad, categoria from tbl_categoria where  cd_cad = '$cat_codigo' union select cd_cad, categoria from tbl_categoria");
    $consultaProd = $cn->query("select * from vw_prod where codigo = '$cd_codigo'");
    $exibirProd = $consultaProd->fetch(PDO::FETCH_ASSOC);

    ?>
<div class="container ">
    <form class="form form-control-sm" name="frmCadastroProd" method="post" action="alteraReg.php?cd=<?php echo $cd_codigo; ?>">
        <div class="col-sm-3 offset-md-4">
            <h2>Alteração de produto</h2>
            <br>
            <label for="prod" class="form-label">Produto</label>
            <input type="text" value="<?php echo $exibirProd['produto']; ?>" class="form-control" id="txtrod" name="txtprod">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" value="<?php echo $exibirProd['preco']; ?>" class="form-control" id="txtpreco" name="txtpreco">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="preco" class="form-label">Quantidade</label>
            <input type="number" value="<?php echo $exibirProd['qtd']; ?>" class="form-control" id="qtd" name="qtd" disabled="">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="cat" class="form-label">Selecione a categoria</label>
            <select id="cat" name="cat" class="form-select">
                <option disabled>Categorias:</option>
                <?php while($exibirCat = $consultaCat->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php  echo $exibirCat['cd_cad'].''; ?>"><?php  echo $exibirCat['categoria'].''; ?></option>
                <?php };?>
            </select>
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>
</body>
</html>