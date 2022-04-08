<!DOCTYPE html>

<html lang="pt-br">

<header>

<meta charset="UTF-8">
<title>Ver usuários</title>

</header>

<style>

h2
{
    
    margin-top: 110px;
}
.tabela
{
    border: 2px solid #000000;
    margin-top: 10px;
}
td
{
    border: 2px solid #000000;
}

    </style>

    <body>
<button onclick="window.location='index.php'">Voltar</button>
<br>&larr;


<center>

    <h2>Usuários cadastrados</h2>

    <?php

include_once ('conexao.php');

$query = mysqli_query($conexao,"select * from tbllogin order by id");
	if (!$query) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao));  
	}
    
    echo'<table class="tabela">';
    echo'<tr>';
    echo'<th>Nome</th>';
    echo'<th>Sobrenome</th>';
    echo'<th>usuario</th>';
    echo'<th>Senha</th>';
    echo '<th>E-mail</th>';
    echo'</tr>';
    echo'<tr>';

    while($dados=mysqli_fetch_array($query))
    {
    echo'<td>' . $dados['nome'] . '</td>';
    echo'<td>' . $dados['sobrenome'] . '</td>';
    echo'<td>' . $dados['usuario'] . '</td>';
    echo'<td>' . $dados['senha'] . '</td>';
    echo'<td>' . $dados['email'] . '</td>';
  echo'</tr>';
    }
  echo'</table></center>';
    mysqli_close($conexao);
?>

    </body>


    </html>
