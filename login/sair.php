<?php
	try {
		session_start();
		session_destroy();

		//Remover todas as informações contidas nas variaveis globais
		unset($_SESSION['usuarioId'],
	          $_SESSION['usuarioNome'], 
	          $_SESSION['usuarioNivelAcesso'],
	          $_SESSION['usuarioLogin'],
	          $_SESSION['usuarioSenha']);
		//redirecionar o usuário para a página de login
		header("Location: login.php");

		
	} catch (Exception $e) {
		echo $e->getMenssage();
		
	}
	
?>