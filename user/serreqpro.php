<?php
include("db.php");
$obj=new db();
$username=$_POST["uname"];
$service=$_POST["service"];
$sql="insert into serreq (username,service) values('$username','$service')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="index.php#serreq";

</script>