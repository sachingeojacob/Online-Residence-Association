<?php
include("db.php");
$obj=new db();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$uname=$_POST['uname'];
$password=$_POST['pwd'];
$insert="insert into login values(NULL,'$uname','$password','caretaker',1)";
$obj->exe($insert);
$select="select max(id) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
$insert1="insert into caretaker values(NULL,'$name','$email',$phone,'$gender','$address','$uname',$logid,1)";

$obj->exe($insert1);

//$obj->exe($insert2);
?>
<script>
alert(' Sucessfully Details Added');
window.location="newcare.php";

</script>