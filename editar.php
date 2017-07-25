<?php
	include 'conecta.php';
	/*==========================DELETA ITEM NA TABELA====================================*/
	if (isset($_POST['nome'])) {
		$nome = $_POST['nome'];
		var_dump($nome);
		if (mysqli_query($conn,"UPDATE login
								SET nome = '$nome' 
								WHERE id = 2")){
			$msg = "<br>Login editado com sucesso";
			echo $msg;
		}else{
			$msg = "<br>ERRO!<br>";
			echo $msg;
			echo mysqli_error($conn);
		}
	}
?>