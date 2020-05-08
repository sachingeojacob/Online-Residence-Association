<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['id'];
 $sql="select logid from user where userid=$userid";
 $res=$obj->exe($sql);
 $row=mysqli_fetch_array($res);
 $logid=$row[0];
 $delete= "delete from user where userid='$userid'";
 $obj->exe($delete);
 $delete1="delete from login where id=$logid";
 $obj->exe($delete1);
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewuser.php";
    </script>