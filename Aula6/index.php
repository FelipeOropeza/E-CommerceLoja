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
    include 'jumb.php';
    $consulta = $cn->query("select * from vw_prod");
?>

<div class="container-fluid">
        <div class="row">
        <?php while($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){?>
            <div class="col-sm-3">
                <div><h5><b>Produto: <?php echo $exibir['produto']; ?></b></h5></div>
                <div><h5>Preço: R$ <?php echo number_format($exibir['preco'],2, ',','.'); ?></h5></div>
                <div class="text" style="margin-top:5px; margin-bottom:5px;">
                <a class="btn btn-xl btn-block btn-success" href="formComprar.php?cd=<?php echo $exibir['codigo'];?>" role="button">Comprar</a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>
