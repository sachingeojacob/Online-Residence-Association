<?php
include("db.php");
$obj=new db();
$username=$_POST["uname"];
$comp=$_POST["comp"];
$sql="insert into complaints (username,complaint) values('$username','$comp')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully sent');
window.location="index.php#comp";

</script>