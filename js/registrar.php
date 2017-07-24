<?php
	include 'conecta.php'
	$val = $_POST['value'];
	if($val = '2'){
		/*==========================INSERE NA TABELA====================================*/
		if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			if (mysqli_query($conn, "INSERT INTO login (nome,email,senha) VALUES ('$nome','$email', HASHBYTES('SHA1','$senha'))")) {
				$msg = "Login $nome registrado com sucesso!";
				$erro = "success";
			}else{
				$msg = "ERRO!";
				$erro = "danger";
			}
		}
		/*================================LISTA A TABELA================================*/
		$sql = mysqli_query($conn, "SELECT * FROM login") or die(mysqli_error($conn));
		while ($res = mysqli_fetch_assoc($sql)) {
			echo "<tr>";
				echo "<td>".$res["id"]."</td>";
			echo "</tr>";
		}
	}
?>