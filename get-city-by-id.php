<?php
    $sql = "SELECT * FROM city WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();

    print "<table>";
        print "<tr>";
        print "<th>City</th>";
        print "</tr>";
        print "<tr>";
            print "<td>".$row->city."</td>";
        print "</tr>";
?>