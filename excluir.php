<?php
	include 'conecta.php';
	/*==========================DELETA ITEM NA TABELA====================================*/
	if (mysqli_query($conn,"DELETE FROM login WHERE id=2")){
		$msg = "<br>Login excluido com sucesso";
		echo $msg;
	}else{
		$msg = "<br>ERRO!<br>";
		echo $msg;
	}
?>