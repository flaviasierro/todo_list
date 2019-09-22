<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'php_com_pdo');	

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


//$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
//$sql = mysqli_query($conexao, "INSERT INTO usuario (nome_user, nome_completo_user, email_user, senha_user) values ('teste', 'teste Silva', 'teste@teste.com.br','teste')") or die("Erro");

//SENHA CRIPTOGRAFADA.
//$sql = mysqli_query($conexao, "INSERT INTO usuario (nome_user, nome_completo_user, email_user, senha_user) VALUES ('$novoUsuario', '$nome', '$email', md5('{$senha}'))") or die("Erro");





?>