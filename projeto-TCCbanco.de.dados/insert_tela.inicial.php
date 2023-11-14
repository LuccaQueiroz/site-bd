<?php
/*Criando conexão com o banco de dados */

include "conexao.php";

$enviar = $_POST ['enviar'];


/*Comando para insert into*/
$sql = "INSERT INTO tb_canal (descricao_canal) VALUES ('$enviar');"



echo $sql;
/*Comando para enviar os dados o banco*/
$insert = mysqli_query($conexao, $sql);


header('Location: index.php?msg=1');
?>