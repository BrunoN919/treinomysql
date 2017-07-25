<?php
include 'conecta.php';
$val = $_POST['value'];
if ($val == "1") {	
	$sql = mysqli_query($conn, "SELECT * FROM login") or die(mysqli_error($conn));
	echo "<a href='registro.php' class='btn btn-success'>Inserir um novo login</a>";
	while ($res = mysqli_fetch_assoc($sql)) {
		echo "<table>".
		 	"<tr>".
				"<td style='border :1px solid;'>ID</td>".
				"<td style='border :1px solid;'>Nome</td>".
				"<td style='border :1px solid;'>Email</td>".
			"</tr><br>".
			"<tr>".
				"<td style='border : 1px solid'>".$res["id"]."</td>".
				"<td style='border : 1px solid'>".$res["nome"]."</td>".
				"<td style='border : 1px solid'>".$res["email"]."</td>".
				"<td><a href='editar.php' class='btn btn-primary'>Editar</a></td>".
				"<td><a href='editar.php' class='btn btn-danger'>Excluir</a></td>".
			"</tr><br>".
		"</table>";
	}
} 
mysqli_close($conn);
?>