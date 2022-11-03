<?php
    $sql = "SELECT * FROM adress WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();

    print "<table>";
        print "<tr>";
        print "<th>Adress</th>";
        print "</tr>";
        print "<tr>";
            print "<td>".$row->adress."</td>";
        print "</tr>";
?>