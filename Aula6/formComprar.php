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

<div class="container-fluid">

	<div class="row align-items-start" style="padding-top: 20px; margin-left: 20px;">
		
		<div class="col-sm-4 col-sm-offset-1">
			<div class="col-sm-5"><h4><?php echo $exibir['produto'];?></h4></div>
		</div>
		
		<div class="col-sm-4 col-sm-offset-1">
			<div class="col-sm-2"><h4><?php echo number_format($exibir['preco'], 2, ',', '.');?></h4></div>
		</div>
		
		<div class="col-sm-4 col-sm-offset-1">
			<button class="btn btn-lg btn-success">Comprar</button>
		</div>
	</div>
</div>
</body>
</html>
