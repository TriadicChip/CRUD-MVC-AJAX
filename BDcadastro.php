<?php
    
    include_once ('conexao.php');

    try
{
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

}catch (Exception $e){
	
		die('Ocorreu um erro, por favor, tente novamente mais tarde');
	}

$sqlinsert =  "insert into tbllogin (nome, sobrenome, usuario, senha, email) values ('$nome', '$sobrenome', '$usuario', '$senha', '$email')";

$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' .  @mysqli_error($conexao)); 
	} else {
		echo "<center><br><br><br>Registro Cadastrado com Sucesso<br><br><a href='tabela.php'>Ver tabela</a><br><br><a href='index.php'>Voltar</a>";
	} 
	mysqli_close($conexao);
    
    ?>
