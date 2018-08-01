<?php
    session_start();
    include_once("seguranca.php");
    
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="página Administrativa">
    <meta name="author" content="RENATA,LETICIA,DOUGRAS">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Cadastrar Usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>
     <?php
    include_once("menu_admin.php");
    
    ?>
    <!-- conteiner -->
    <div class="container theme_showcase" role="main">
      <div class="page-header">
        <h1>Cadastrar Usuários</h1>
      </div>
      <div class="row">
        <div  class="col-md-12">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="E-mail">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div><!-- /conteiner -->
    

  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

