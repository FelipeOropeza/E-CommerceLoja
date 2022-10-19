<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';
        $consulta = $cn->query("select * from tbl_categoria");
    ?>
<div class="container ">
    <form class="form form-control-sm" name="frmCadastroProd" method="post">
        <div class="col-sm-3 offset-md-4">
            <h2>Cadastro de produto</h2>
            <br>
            <label for="prod" class="form-label">Produto</label>
            <input type="text" class="form-control" id="prod" name="prod" pattern="([aA-zZ]+)">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="preco" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="qtd" name="qtd" min="1">
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="cat" class="form-label">Selecione a categoria</label>
            <select id="cat" name="cat" class="form-select">
                <option disabled>Categorias:</option>
                <?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php  echo $exibir['cd_cad'].''; ?>"><?php  echo $exibir['categoria'].''; ?></option>
                <?php };?>
            </select>
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <button id="entrar" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
<script src="scriptProd.js"></script>
</body>
</html>
