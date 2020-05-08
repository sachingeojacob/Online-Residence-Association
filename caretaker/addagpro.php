<?php
include("db.php");
$obj=new db();
$brname=$_POST['brname'];
$email=$_POST['agname'];
$phone=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=$_POST['pwd'];
$insert="insert into login values(NULL,'$uname','$password','ag',1)";
$obj->exe($insert);
$select="select max(user_id) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
$insert1="insert into agentreg values(NULL,,$logid,'$brname','$agname',$age,'$gender','$address','$phone','$email','$uname',1)";

$obj->exe($insert1);

//$obj->exe($insert2);
?>
<script>
alert(' Sucessfully Details Added');
window.location="newag.php";

</script>