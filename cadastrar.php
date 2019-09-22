<?php
include_once"conexao.mysqli.php";


?>


<!DOCTYPE html> 

<html lang="pt-br">

<head>

<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Todo - list</title>
      <link rel="stylesheet" href="css/style.css"/>
  
</head>
<body>
  <h1>Cadastre-se</h1>
  
<div class="login-page">
  <div class="form">
    <form class="login-form" action="cadastrarSucesso.php" method="POST">
      <input type="text" name="novoUsuario" placeholder="Criar usuario"/>
      <input type="text" name="nome" placeholder="Nome Completo"/>
       <input type="text" name="email" placeholder="E-mail"/>
      <input type="password" name="senha" placeholder="senha"/>
      <button>Cadastrar</button>
       <p class="message">Já possui Cadastro? <a href="index.php">Entrar</a></p>
 
    </form>
  </div>
</div>

</body>

</html>
