<?php
	include 'conecta.php';
	require 'verifica.php';
		/*==========================ALTERA ITEM NA TABELA====================================*/
	if (isset($_POST["nome"]) && isset($_GET['id'])) {
		$id = $_GET['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		if (mysqli_query($conn,"UPDATE login
								SET nome = '$nome', email = '$email'  
								WHERE id = $id")){
			$msg = "<br>Login editado com sucesso!";
			echo $msg."<br>"."<a href='index.php'>Voltar ao login</a>";
		}else{
			$msg = "<br>ERRO!<br>";
			echo $msg;
		}
	}
?>