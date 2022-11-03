<?php
    $sql = "SELECT * FROM state WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();

    print "<table>";
        print "<tr>";
        print "<th>State</th>";
        print "</tr>";
        print "<tr>";
            print "<td>".$row->state."</td>";
        print "</tr>";
?>