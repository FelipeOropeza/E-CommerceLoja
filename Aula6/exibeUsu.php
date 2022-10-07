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

    $consulta = $cn->query('select * from tbl_usuario where Acesso = 0');
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $exibir['Codigo']; ?></td>
            <td><?php echo $exibir['Nome']; ?></td>
            <td><?php echo $exibir['Login']; ?></td>
        </tr>
        <?php }; ?>
    </table>
</div>
</body>
</html>