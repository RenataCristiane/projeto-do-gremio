<?php
try {
	session_start();
	include_once("conexao.php");
	$usuario = $_POST['usuario'];
	$senha	= $_POST['senha'];


	$result = $link->prepare("SELECT * FROM user WHERE login = ? AND senha= ? LIMIT 1");
	$result->bindParam(1,$usuario);
	$result->bindParam(2,$senha);
	$result->execute();
	$resultado = $result->fetch(PDO::FETCH_ASSOC);
	
	if(empty($resultado)){
			//Mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido!";

			//Manda o usuario para a tela de login
			header("Location: login.php");

	}else{
			
			//Defini os valores atribuidos aos usuarios
			$_SESSION['usuarioId']			= $resultado['id_user'];
			$_SESSION['usuarioNome']		= $resultado['nome'];
			$_SESSION['usuarioNivelAcesso']	= $resultado['nivel_acesso_id'];
			$_SESSION['usuarioLogin']		= $resultado['login'];
			$_SESSION['usuarioSenha']		= $resultado['senha'];
			if ($_SESSION['usuarioNivelAcesso'] == 1) {
				header("Location: administrativo.php");
			}else{
				header("Location: usuario.php");
			}
			
	}


	
} catch (Exception $e) {
	echo $e->getMessage();
	
}
		

	
?>