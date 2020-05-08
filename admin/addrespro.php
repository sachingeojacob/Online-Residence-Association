<?php
include("db.php");
$obj=new db();
$design=$_POST["design"];
$winner=$_POST["winner"];
$sql="insert into decresult (elname,result) values('$design','$winner')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="addres.php";

</script>