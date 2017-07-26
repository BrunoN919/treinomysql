<?php
	include 'conecta.php';
	session_start();
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha = md5($senha);
	if (isset($_POST['email']) && isset($_POST['senha'])){
		$sql = "SELECT id,nome,email, senha	
		FROM login
		WHERE email = '$email' AND senha = '$senha'";
		var_dump($sql);
		$result_email = @mysqli_query($conn,$sql) or die("ERRO NO BANCO DE DADOS"); 
		$total = @mysqli_num_rows($result_email);
		if ($total) {
			$dados = @mysqli_fetch_array($result_email);
			echo "<br>";
			var_dump($dados);
			if (!strcmp($senha , $dados["senha"])) {
				$_SESSION["id_usuario"]= $dados["id"]; 
				$_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
				$_SESSION["email_usuario"] = $dados["email"];
				header("Location: tabela.php");
			}

		}
	} 
?>
