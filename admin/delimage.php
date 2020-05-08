<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['id'];
 
 $delete= "delete from gallery where gid='$userid'";
 $obj->exe($delete);

 ?>
<script>
		alert("Sucessfully Deleted");
		window.location="viewimage.php";
    </script>