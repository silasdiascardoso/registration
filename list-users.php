<h1>List Users</h1>
<?php
	$sql = "SELECT * FROM user";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table>";
		print "<tr>";
		print "<th>Name</th>";
		print "<th>Action</th>";
		print "</tr>";
		While($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->name."</td>";
			print "<td>
				<button onclick=\"lcation.href='?page=edit&name=".$row->name."';\"> edit </button>
				<button onclick=\"if(confirm(Are you sure?)){lcation.href='?page=save&action=delete&name=".$row->name."';}else{false;}\"> delete </button>
				print</td>"
			print "</tr>";
		}
		print "</table>"
	}else{
		print "<p> Not Result </p>";
	}