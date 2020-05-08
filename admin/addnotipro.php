<?php
include("db.php");
$obj=new db();
$date=$_POST["date"];
$image=$_POST["image"];

$sql="insert into notification (date,notification) values('$date','$image')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="addnoti.php";

</script>