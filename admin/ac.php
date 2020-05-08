<?php
include("db.php");
$obj=new db();
$id=$_GET['un'];
//echo $id;
$select="select logid from user where userid=$id";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
//$logid;
$update="update user set status=1 where userid=$id"; 
$obj->exe($update);
$update1="update  login set usertype='user',status=1 where id=$logid"; 
$obj->exe($update1);
?>
<script>
		alert("Sucessfully Details Updated");
		window.location="newuser.php";
    </script>