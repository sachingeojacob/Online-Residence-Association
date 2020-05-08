<?php
include("db.php");
$obj=new db();
$id=$_POST["id"];
$date=$_POST["date"];
$news=$_POST["message"];
$sql="insert into news (date,news) values('$date','$news')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="addnews.php";

</script>