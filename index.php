<!DOCTYPE html>

<html lang="pt-br">

<header>

    <meta charset="UTF-8">
<title>CRUD + MVC + AJAX</title>

</header>

<style>

    .h2Cadastro
    {
        margin-top: 50px;
    }
    .divFrm
    {
        border: 3px solid black;
        height: 300px;
        width: 250px;
        margin-top: 5px;
    }
    .frmCampo
    {
        margin-top: 20px;
        width: 95%;
    }
    .frmBtn
    {
        margin-top: 30px;
    }
    .btnVerUsuarios
    {
        margin-top: 20px;
    }

    </style>

<body>

<center>

<h1>CRUD + MVC + AJAX</h1>
<hr>

<h2 class="h2Cadastro" >Cadastro</h2>
<div class="divFrm">
<form name="frmCadastro" method="POST" action="BDcadastro.php">
    <input type="text" class="frmCampo" name="nome" placeholder="Digite seu nome">
    <input type="text" class="frmCampo" name="sobrenome" placeholder="Digite seu sobrenome">
    <input type="text" class="frmCampo" name="usuario" placeholder="Digite seu nome de usuário">
    <input type="password" class="frmCampo" name="senha" placeholder="Digite sua senha">
    <input type="email" class="frmCampo" name="email" placeholder="Digite seu e-mail">
    <input type="reset" class="frmBtn" name="" value="Limpar"> <input type="submit" class="frmBtn" value="Cadastrar">
</form>
</div>

<input type="button" class="btnVerUsuarios" value="Ver usuários cadastrados" onclick="window.location='tabela.php'">

</center>

    </body>

    </html>
