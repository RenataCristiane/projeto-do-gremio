<?php
	try {
			session_start();
			include_once("seguranca.php");
			echo "Bem vindo  ".$_SESSION['usuarioNome'];

		
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
<br />
<a href="sair.php">Sair</a>