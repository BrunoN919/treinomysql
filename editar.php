<?php
	include 'conecta.php';
		/*==========================ALTERA ITEM NA TABELA====================================*/
	if (isset($_POST['nome']) && isset($_GET['id'])) {
		$id = $_GET['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		if (mysqli_query($conn,"UPDATE login
								SET nome = '$nome', email = '$email' , senha = SHA1('$senha') 
								WHERE id = $id")){
			$msg = "<br>Login editado com sucesso!";
			echo $msg."<br>"."<a href='index.php'>Voltar ao login</a>";
		}else{
			$msg = "<br>ERRO!<br>";
			echo $msg;
		}
	}
?>