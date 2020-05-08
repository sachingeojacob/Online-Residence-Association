<?php
session_start();
$id=$_SESSION['id'];
echo $id;
include("db.php");
$obj=new db();
$uname =$_POST['uname'];
$housenum=$_POST['housenum'];
$gender=$_POST['gender'];

$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];

$select="select userid from user where logid=$id";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$custid=$row[0];
//echo $rid;
//custid cname address gender phone email uname logid status
$update="update  user set name ='$uname',email='$email',gender='$gender',phone=$phone,housenum='$housenum',username='$username' where userid=$custid";
$update1="update login set username='$username' where id=$id";
$obj->exe($update);
$obj->exe($update1);

?>
	<script>
		alert("Sucessfully Details Updated ");
		window.location="index.php";
    </script>