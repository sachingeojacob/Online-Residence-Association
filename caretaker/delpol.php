<?php
include"db.php";
 $obj=new db();
 $id=$_GET['id'];
 
// echo $logid;
 $delete="delete from policy where id='$id'";
 $obj->exe($delete);

 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewpol.php";
    </script>