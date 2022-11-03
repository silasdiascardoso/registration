<h1>List Adress</h1>
<h1>List City</h1>

<?php
	include("config.php");

	$sql = "SELECT * FROM city";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table>";
		print "<tr>";
		print "<th>City</th>";
		print "</tr>";
		While($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->city."</td>";
			print "</tr>"
		}
		print "</table>"
	}else{
		print "<p> Not Result </p>";
	}