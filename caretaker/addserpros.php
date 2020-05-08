<?php
include("db.php");
$obj=new db();
$sname=$_POST["sname"];
$service=$_POST["service"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$sql="insert into serpro (sername,service,email,phone,gender) values('$sname','$service','$email','$phone','$gender')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully inserted');
window.location="index.php";

</script>