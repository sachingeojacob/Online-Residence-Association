<?php
include("db.php");
$obj=new db();
$provider=$_POST["provider"];
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$sql="insert into sermsg (sername,name,housenum,phone,message) values('$provider','$name','$address','$phone','$message')";
$res=$obj->exe($sql);

$id=$_POST['id'];
$update="update serreq set status=1 where srid=$id";
$obj->exe($update);
?>
<script>
alert(' Successfully Sent');
window.location="viewpend.php";

</script>