<?php
include"db.php";
 $obj=new db();
 $id=$_GET['id'];
 $sql="select loginid from agentreg where id=$id";
 $res=$obj->exe($sql);
 $row=mysqli_fetch_array($res);
 $logid=$row[0];
// echo $logid;
 $delete="delete from agentreg where id='$id'";
 $obj->exe($delete);
 $delete1="delete from login where user_id=$logid";
 $obj->exe($delete1);
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewemp.php";
    </script>