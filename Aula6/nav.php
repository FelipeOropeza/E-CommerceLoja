<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sword art Online</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      <form class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
        if(empty($_SESSION['ID'])){
            header('location:login.php');
      ?><?php } else { ?>
        <?php
            if($_SESSION['Status'] == 0){
            $consulta_usuario = $cn->query("select nome from tbl_usuario where codigo = '$_SESSION[ID]'");
            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
        ?>
        <li class="nav-item"><a href="#" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg> &nbsp;<?php  echo $exibe_usuario['nome']; ?></a></li>
        <li class="nav-item"><a class="nav-link" href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
        </li>
        </ul>
        <?php }else { ?>
          <li class="nav-item"><a href="menuAdmis.php" class="nav-link active">&nbsp; Administrador</a></li>
          <li class="nav-item"><a class="nav-link" href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
        <?php }} ?>
      </form>
    </div>
  </div>
</nav>