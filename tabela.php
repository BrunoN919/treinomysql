<?php
include 'conecta.php';
$val = $_POST['value'];
if ($val == "1") {	
	$sql = mysqli_query($conn, "SELECT * FROM login") or die(mysqli_error($conn));
	echo "<a href='registro.php' class='btn btn-success'>Inserir um novo login</a>";
	while ($res = mysqli_fetch_assoc($sql)) {
		echo "<table style='border :1px solid;>".
		 	"<tr style='border : 1px solid'>".
				"<th style='border : 1px solid'>ID</th>".
				"<th style='border : 1px solid'>Nome</th>".
				"<th style='border : 1px solid'>Email</th>".
				"<th style='border : 1px solid'></th>".
				"<th style='border : 1px solid'></th>".
			"</tr><br>".
			"<tr style='border : 1px solid'>".
				"<td style='border : 1px solid'>".$res["id"]."</td>".
				"<td style='border : 1px solid'>".$res["nome"]."</td>".
				"<td style='border : 1px solid'>".$res["email"]."</td>".
				"<td style='border : 1px solid'><a href='edita.php?id=".$res['id']."' class='btn btn-primary' id=".$res["id"].">Editar nome</a></td>".
				"<td style='border : 1px solid'><a href='excluir.php?id=".$res['id']."' class='btn btn-danger' id=".$res["id"].">Excluir</a></td>".
			"</tr>".
		"</table>";
	}
} 
mysqli_close($conn);
?>