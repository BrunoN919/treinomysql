<?php
include 'conecta.php'
$val = $_POST['value'];
if ($val == "1") {	
	$sql = mysqli_query($conn, "SELECT * FROM login") or die(mysqli_error($conn));
	while ($res = mysqli_fetch_assoc($sql)) {
		// echo "<tr>";
		// 	echo "<td>".$res["id"]."</td>";
		// echo "</tr>";
	}
} 
mysqli_close($conn);
?>