<?php
	include 'conecta.php';
	/*==========================INSERE NA TABELA====================================*/
	if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		if (mysqli_query($conn,"INSERT INTO login (id,nome,email,senha) 
								VALUES (NULL,'$nome','$email',SHA1('$senha'))")){
			$msg = "<br>Login registrado com sucesso<br>";
			echo $msg."<br>"."<a href='index.php'>Voltar a lista</a>";
		}else{
			$msg = "<br>ERRO!<br>";
			echo $msg;
			print mysqli_error($conn);
		}
	}
?>