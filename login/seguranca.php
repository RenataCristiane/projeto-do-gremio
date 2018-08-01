<?php
	try {
		ob_start();
		if (($_SESSION['usuarioId'] == ""|| ($_SESSION['usuarioNome']) == "") ||($_SESSION['usuarioNivelAcesso'] == "")||($_SESSION['usuarioLogin'] == "") || ($_SESSION['usuarioSenha'] == "")){

			  unset(
		          $_SESSION['usuarioId'],
		          $_SESSION['usuarioNome'], 
		          $_SESSION['usuarioNivelAcesso'],
		          $_SESSION['usuarioLogin'],
		          $_SESSION['usuarioSenha']
		        
		        );
			//Mensagen de erro
			$_SESSION['loginErro'] = "Áre restrita para usuários cadastrados!";

			//Manda o usuario para a tela de login
			header("Location: login.php");
		} 
		

		
	} catch (Exception $e) {
		$e->getMessage();
	}

	

?>