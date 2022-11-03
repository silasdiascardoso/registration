<h1>List State</h1>

<?php
	include("config.php");

	$sql = "SELECT * FROM state";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table>";
		print "<tr>";
		print "<th>state</th>";
		print "</tr>";
		While($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->state."</td>";
			print "</tr>"
		}
		print "</table>"
	}else{
		print "<p> Not Result </p>";
	}