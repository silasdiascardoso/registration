<html>
    <head>
 	  <title>new user</title>	
 	</head>
 <body>
 	<?php
 		include("config.php");

 		switch ($_REQUEST["action"]){
 			case 'insert':
 				$name = $POST["name"];			

 				$sql = "INSERT INTO user (name) VALUES ('{$name}')"
 				$res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Registration Completed');</script>";
                    print "<script> location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('error in registration');</script>";
                    print "<script> location.href='?page=listar';</script>";
                }
 				break;
 				
 			case 'edit':
 				$name = $POST["name"];

                $sql = "UPDATE user SET name='{$name}' WHERE id=".$_REQUEST["name"];	

                 if($res==true){
                    print "<script>alert('Editing done');</script>";
                    print "<script> location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Error in editing');</script>";
                    print "<script> location.href='?page=listar';</script>";
                }	
 				break;
 			case 'delete':
 				$sql = "DELETE FROM user WHERE name=".$_REQUEST["name"];
                if($res==true){
                    print "<script>alert('Successfully deleted');</script>";
                    print "<script> location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Deletion error');</script>";
                    print "<script> location.href='?page=listar';</script>";
                }   


 				break;
 		}
 </body>
</html>