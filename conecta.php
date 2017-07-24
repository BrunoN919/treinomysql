<?php
	$conn = mysqli_connect('localhost', 'root','123987','testes');
	if (!$conn) {
		echo "Nao foi possivel conectar";
		print(mysqli_error());
	}
	echo "Conexão bem sucedida<br>"; 
?>