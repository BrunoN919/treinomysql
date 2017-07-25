<?php
	include 'conecta.php';
	echo $_GET['id'];
		/*==========================ALTERA ITEM NA TABELA====================================*/
	if (isset($_POST['nome'])&& isset($_GET['id'])) {
		$nome = $_POST['nome'];
		$id = $_GET['id'];
		if (mysqli_query($conn,"UPDATE login
								SET nome = '$nome' 
								WHERE id = $id")){
			$msg = "<br>Login editado com sucesso";
			echo $msg;
		}else{
			$msg = "<br>ERRO!<br>";
			echo $msg;
		}
	}
?>