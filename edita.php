<?php 
	include 'conecta.php';
	$id = $_GET['id'];
	$sql = mysqli_query($conn, "SELECT nome , email 
								FROM login
								WHERE id = $id");
	$res = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<div align="center">
		<h1>Editar</h1>
		<form method="POST" action="editar.php?id=<?php echo $id?>">
			<label>Nome: </label><br>
			<input type="text" name="nome" id="nome" value="<?php echo $res['nome'] ?>"><br>
			<label>Email: </label><br>
			<input type="text" name="email" id="email" value="<?php echo $res['email'] ?>"><br>
			<input type="submit" name="editar" id="editar" value="Editar" class="btn btn-primary">
		</form>
	</div>
</body>
</html>