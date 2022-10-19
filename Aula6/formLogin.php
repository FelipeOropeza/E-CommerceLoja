<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Recuperar</title>
    <style>
        body{
            margin-top: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="form form-control-sm" name="frmCadUsu" method="post" autocomplete="off">
        <div class="form-group">
            <div class="col-sm-3 offset-md-4">
                <h2>Criar uma Conta</h2>
                <br>
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" id="nome" class="form-control form-control-sm">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-3 offset-md-4">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" id="email" class="form-control form-control-sm">
            </div>
        </div>
        <br>
        <div class="col-sm-3 offset-md-4">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control form-control-sm">
                <br>
                <button id="entrar" class="btn btn-primary">Cadastrar</button>
            </div>
    </form>
</div>
<script src="scriptCad.js"></script>
</body>
</html>