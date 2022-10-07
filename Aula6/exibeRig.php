<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Loja</title>
    <style>
    img{
            width: 30px;
            height: 30px;
            margin-left:8px;
    }
    </style>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';
        $consulta = $cn->query("select * from vw_prod");
     ?>
</head>
<body>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Codigo</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $exibir['codigo'].''; ?></td>
            <td><?php echo $exibir['produto']; ?></td>
            <td>R$ <?php echo number_format($exibir['preco'],2, ',','.'); ?></td>
            <td><?php echo $exibir['qtd']; ?></td>
            <td><?php echo $exibir['categoria']; ?></td>
            <td><a href="formAlter.php?cd=<?php echo $exibir['codigo'];?>&cat=<?php echo $exibir['cd_cad']?>"><img src="img/alterar.png"></a></td>
            <td><a href="excluirProd.php?cd=<?php echo $exibir['codigo']; ?>"><img src="img/excluir.png"></a></td>
        </tr>
        <?php }; ?>
    </table>
</div>
</body>
</html>