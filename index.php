<?php
session_start();
?>

<!DOCTYPE html> 

<html lang="pt-br">

<head>

<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Todo - list</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <h1>Todo List</h1>
<div class="login-page">
  <?php
    if(isset($_SESSION['nao_autenticado'])):
  ?>
<div class="alert alert-success" role="alert">
  <p>Usuário ou senha inválidos.</p>
</div>
<?php
   endif;
  unset($_SESSION['nao_autenticado']);
?>
  <div class="form">
    <form class="login-form" action="login.php" method="POST">
      <input type="text" name="usuario" placeholder="Usuario"/>
      <input type="password" name="senha" placeholder="Senha"/>
      <button>Entrar</button>
       <p class="message">Não possui cadastro? <a href="cadastrar.php">Cadastrar</a></p>
 
    </form>
  </div>
</div>

</body>

</html>
