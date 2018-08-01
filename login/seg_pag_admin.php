<?php
  try {
  	if ($_SESSION['usuarioNivelAcesso'] != 1 ) {
 
			//Manda o usuario para a tela de login
			header("Location: usuario.php");

  	}
  	
  } catch (Exception $e) {
  		$e->getMessage();
  }
?>