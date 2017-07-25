<!DOCTYPE html>
<html>
<head>
	<title>Registre-se</title>
	<meta charset="utf-8">
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<div align="center">
		<h1>Rigistre-se</h1>
		<form method="POST" action="registrar.php">
			<label>Nome: </label><br>
			<input type="text" name="nome" id="nome"><br>
			<label>Email: </label><br>
			<input type="email" name="email" id="email"><br>
			<label>Senha: </label><br>
			<input type="password" name="senha" id="senha"><br><br>
			<input type="submit" name="registrar" id="registrar" value="Registrar" class="btn btn-primary">
		</form>
	</div>
</body>
</html>