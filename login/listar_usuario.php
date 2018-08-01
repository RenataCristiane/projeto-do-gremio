<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="página Administrativa">
    <meta name="author" content="RENATA,LETICIA,DOUGRAS">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Administrativo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>
  	 <?php
     try {
        include_once("menu_admin.php");
        $resultado=$link->prepare("SELECT * FROM user ORDER BY 'id_user'" );
        $resultado->execute();
        
      
     } catch (Exception $e) {
       echo $e->getMessage();
     }

        

    ?>
  	<!-- conteiner -->
  	<div class="container theme_showcase" role="main">
  		<div class="page-header">
  			<h1>Lista de Usuários</h1>
  		</div>
  		<div class="row">
  			<div  class="col-md-12">
  				<table class="table">
  					<thead>
  						<tr>
  							<th>ID</th>
  							<th>Nome</th>
  							<th>E-mail</th>
  							<th>Nivel de Acesso</th>
                <th>Ações</th>
  						</tr>
  					</thead>
  					<tbody>
              <?php
                try {
                    foreach ($resultado as $item) {
                      echo "<tr>";
                          echo "<td>".$item['id_user']."</td>";
                          echo "<td>".$item['nome']."</td>";
                          echo "<td>".$item['email']."</td>";
                          echo "<td>".$item['nivel_acesso_id']."</td>";
                          echo "<td>Editar - Visualizar - Apagar</td>";
                      echo "</tr>";
                    }
                } catch (Exception $e) {
                  echo $e->getMessage();
                  
                }
                  
              ?>
  						
  					</tbody>
  				</table>
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

