<?php
	include 'conecta.php';
	$senha = $_POST['senha'];
	$senha = SHA1('$senha');
	if (isset($_POST['email']) && isset($_POST['senha'])){
		$consulta = mysqli_query($conn,"SELECT email , senha
			FROM login");
		echo "<input type='button' value='Listar Tabela' id='tabela'>";
		// foreach ($consult = mysqli_fetch_assoc($consulta) as $key => $value) {
		// 	if ($senha == $consult['senha'] && $_POST['email'] == $consult['email']) {
		// 		echo 'deu certo <br>'; 
		// 	}
		// }		
	}  
?>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
