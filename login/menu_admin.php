<?php
  try {
    if ($_SESSION['usuarioNivelAcesso'] != 1 ) {
 
      //Manda o usuario para a tela de login
      header("Location: usuario.php");

    }
    
  } catch (Exception $e) {
      $e->getMessage();
  }
?><!--Inicio navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="administrativo.php">Grêmio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuário</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="listar_usuario.php">Listar Usuários</a>
          <a class="dropdown-item" href="cadastrar_usuario.php">Cadastrar</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="sair.php">sair</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--Fim navbar-->