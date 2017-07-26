<?php
	include 'conecta.php';
	require 'verifica.php';
	$id = $_GET['id'];
	var_dump($id);
	/*==========================DELETA ITEM NA TABELA====================================*/
	if (mysqli_query($conn,"DELETE FROM login WHERE id=$id")){
		$msg = "<br>Login excluido com sucesso";
		echo $msg;
	}else{
		$msg = "<br>ERRO!<br>";
		echo $msg;
	}
?>