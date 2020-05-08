<?php
include("db.php");
$obj=new db();
$ename=$_POST["ename"];
$can=$_POST["can"];
$date=$_POST["date"];
$sql="insert into electionadd (elname,candidates,edate) values('$ename','$can','$date')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="addele.php";

</script>