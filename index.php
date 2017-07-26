<!DOCTYPE html>
<html>
<head>
	<title>Crud basico</title>
	<meta charset="utf-8">
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<div align="center">
		<form method="POST" action="logar.php">
			<label>Email: </label><br>
			<input type="email" name="email" id="email"><br>
			<label>Senha: </label><br>
			<input type="password" name="senha" id="senha"><br><br>
			<input type="submit" name="logar" id="logar" value="logar" class="btn btn-primary">
		</form><br>
			<a href="registro.php" class="btn btn-success">Registrar</a>
		</div>
</body>
</html>