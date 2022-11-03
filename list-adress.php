<h1>List Adress</h1>

<?php
	include("config.php");

	$sql = "SELECT * FROM adress";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table>";
		print "<tr>";
		print "<th>Adress</th>";
		print "</tr>";
		While($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->adress."</td>";
			print "</tr>"
		}
		print "</table>"
	}else{
		print "<p> Not Result </p>";
	}