<?php
/*Criando conexão com o banco de dados */

include "conexao.php";

$tipo_usuario = $_POST ['novidades'];
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$cpf = $_POST ['CPF'];
$rm_usuario = $_POST ['RM'];
$senha_usuario = $_POST ['senha'];


/*Comando para insert into*/
$sql = "INSERT INTO tb_usuario (cd_usuario, nm_usuario, cpf_usuario, email_usuario, tipo_usuario, senha_usuario, rm_usuario) VALUES (null, '$nome', '$cpf', '$email', '$tipo_usuario', '$senha_usuario', '$rm_usuario');";



echo $sql;
/*Comando para enviar os dados o banco*/
$insert = mysqli_query($conexao, $sql);


header('Location: login.php');
?>