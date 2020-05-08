<?php
session_start();
include("db.php");
$obj=new db();

$id=$_POST['id'];
$name =$_POST['name'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$phone =$_POST['phone'];
$address =$_POST['address'];
$username =$_POST['uname'];

$select="select cid from caretaker where cid=$id";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
//echo $aid;
//custid cname address  phone email uname logid status
$update="update  caretaker set cname ='$name',email ='$email',gender ='$gender',phone ='$phone',address ='$address',username ='$uname' where cid=$id";
$obj->exe($update);
//echo $update."<br/>";
?>

<script>
		alert("Sucessfully Details Updated");
		window.location="editprofile.php";
    </script>
		
