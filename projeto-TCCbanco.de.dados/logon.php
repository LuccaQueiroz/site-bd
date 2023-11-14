<?php
/*Criando conexão com o banco de dados */

include "conexao.php";

/*Recebendo dados do form */

$RM = $_POST ['rm_login'];
$senha = $_POST ['senha_login'];


/*Comando select para puxar os dados de login e senha no banco*/

$sql = "SELECT * FROM tb_usuario where rm_usuario = '$RM'";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

/*Script para conferir os dados e iniciar a sessão*/

$loginbanco = $array['rm_usuario'];
$senhabanco = $array['senha_usuario'];

if ($senhabanco == $senha && $loginbanco  == $RM) {
	header('Location: index.php');
}else{
	header('Location: login.php?msg=1');
	mysql_close();
}
