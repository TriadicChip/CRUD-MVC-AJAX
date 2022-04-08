<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "bdLogin";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco ) 
	or die ("Não foi possível acessar o banco de dados, por favor, tente novamente mais tarde");
	$conexao -> set_charset("utf8");
?>
