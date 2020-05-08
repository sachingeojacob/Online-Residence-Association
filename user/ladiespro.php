<?php
session_start();
include("db.php");
$obj=new db();
$username=$_POST["uname"];
$message=$_POST['message'];
$sql="insert into ladiespanel (username,message) values('$username','$message')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="index.php#team";

</script>