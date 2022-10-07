<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Loja</title>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';
        $consulta = $cn->query("select * from vw_prodHist");
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
            <th>Ocorrência</th>
            <th>Atualização</th>
        </tr>
        <?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $exibir['codigo'].''; ?></td>
            <td><?php echo $exibir['produto']; ?></td>
            <td>R$ <?php echo number_format($exibir['preco'],2, ',','.'); ?></td>
            <td><?php echo $exibir['qtd']; ?></td>
            <td><?php echo $exibir['categoria']; ?></td>
            <td><?php echo $exibir['Ocorrencia']; ?></td>
            <td><?php echo $exibir['Atualizacao']; ?></td>
        </tr>
        <?php }; ?>
    </table>
</div>
</body>
</html>