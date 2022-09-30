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
    <table border="1">
        <tr>
            <td>Codigo</td>
            <td>Produto</td>
            <td>Preço</td>
            <td>Categoria</td>
            <td>Alterar</td>
            <td>Excluir</td>
        </tr>
        <?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php  echo $exibir['codigo'].''; ?></td>
            <td><?php  echo $exibir['produto']; ?></td>
            <td><?php  echo $exibir['preco']; ?></td>
            <td><?php  echo $exibir['categoria']; ?></td>
            <td><a href="#"><img src="img/alterar.png"></a></td>
            <td><a href="#"><img src="img/excluir.png"></a></td>
        </tr>
        <?php }; ?>
        
    </table>
</body>
</html>