<?php
//arquivo de conexão com o banco
	$user="root";
	$pass="";

	try{
			$link = new PDO('mysql:host=localhost;dbname=gremio',$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		}catch(PDOException $e){
			echo $e->getMessage();
		}

?>