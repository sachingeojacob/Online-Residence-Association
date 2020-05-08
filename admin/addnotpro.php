<?php
include("db.php");
$obj=new db();
$date=$_POST["date"];
$not=$_POST["not"];
$sql="insert into notification (date,notification) values('$date','$not')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="addnot.php";

</script>