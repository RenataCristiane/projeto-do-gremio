<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="RENATA,LETICIA,DOUGRAS">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Login do usuário</title>



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Estilos personalizado para este modelo -->
    <link href="css/signin.css" rel="stylesheet">


  </head>
  <?php
  try {
        unset(
              $_SESSION['usuarioId'],
              $_SESSION['usuarioNome'], 
              $_SESSION['usuarioNivelAcesso'],
              $_SESSION['usuarioLogin'],
              $_SESSION['usuarioSenha']
            
            );

    
  } catch (Exception $e) {
        echo $e->getMessage();
    
  }
  
  ?>

  <body class="text-center">
    <form class="form-signin" method="POST" action="valida_login.php">
      <h1 class="h3 mb-3 font-weight-normal">Acesso para usuário</h1>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="text" name ="usuario"  class="form-control" placeholder="digitar o usuário" required autofocus><br />
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="senha" required>
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
         <p class="text-danger">
      <?php
        if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset ($_SESSION['loginErro']);
        }

      ?>
    </p>
      <p class="mt-5 mb-3 text-muted">&copy;2018</p>
    </form>
 
  </body>
</html>
