<?php
include("db.php");
$obj=new db();
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$uname=$_POST['uname'];
$password=$_POST['pwd'];
$insert="insert into login values(NULL,'$uname','$password','user',0)";
$obj->exe($insert);
$select="select max(id) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
$insert1="insert into user values(NULL,'$name','$email','$gender',$phone,'$address','$uname',$logid,0)";

$obj->exe($insert1);

//$obj->exe($insert2);
?>
<script>
alert(' Sucessfully Details Added');
window.location="login.php";

</script>