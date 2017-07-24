<?php
$val = $_POST['value'];



// $con = mysqli_connect('localhost', 'root','123987','testes');

// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// die;


if ($val == "1") {
	$conn = mysqli_connect('localhost', 'root','123987','testes');
	if (!$conn) {
		echo "Nao foi possivel conectar";
		print(mysqli_error());
		exit();
	}
	echo "Conexão bem sucedida<br>"; 	
	$sql = mysqli_query($conn, "SELECT id FROM login") or die(mysqli_error($conn));
	while ($res = mysqli_fetch_assoc($sql)) {
		echo "-----------------------------------------<br>"; 
		echo "Nome:".$res["id"]."<br>"; 
	}
} 
mysqli_close($conn);
?>