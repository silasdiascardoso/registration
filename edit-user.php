<h1>Edit User</h1>>
<?php
    $sql = "SELECT * FROM user WHERE name=".$_REQUEST["name"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="page=save" method="POST">
    <input type="hidden" name="name" value="<?php print $row->name; ?>">
    <div>
        <label>Name</label>div>
        <imput type="text" name="name" value="<?php print $row->name; ?>">
    </div>
