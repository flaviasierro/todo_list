<?php

include_once"conexao.mysqli.php";



$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$novoUsuario = $_POST['novoUsuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = mysqli_query($conexao, "INSERT INTO usuario (nome_user, nome_completo_user, email_user, senha_user) VALUES ('$novoUsuario', '$nome', '$email', '{$senha}')") or die("Erro");

 
    if($sql){
    header('Location: cadastrar.php');
	exit();
	}
 
?>

