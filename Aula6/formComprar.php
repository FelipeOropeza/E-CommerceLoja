<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    session_start();
    include 'conexao.php';
    include 'nav.php';
	
	$codProd = $_GET['cd'];
	$consulta = $cn->query("select * from vw_prod where codigo = '$codProd'");
	$exibir = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<div class="container ">
    <form class="form form-control-sm" name="frmCadastroProd" method="post" action="comprarProd.php">
        <div class="col-sm-3 offset-md-4">
            <h2>Comprar de produto</h2>
            <br>
            <label for="prod" class="form-label">Produto</label>
            <input type="text" value="<?php echo $exibir['produto'];?>" class="form-control" id="prod" name="prod" readonly>
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" value="<?php echo number_format($exibir['preco'], 2, ',', '.');?>" class="form-control" id="preco" name="preco" readonly>
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
            <label for="preco" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="qtd" name="qtd" min="1">
        </div>
        <br>
		<div class="col-sm-3 offset-md-4">
            <button type="submit" class="btn btn-success">Comprar</button>
        </div>
    </form>
</div>
</body>
</html>
