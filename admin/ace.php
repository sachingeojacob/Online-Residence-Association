<?php
include("db.php");
$obj=new db();
$id=$_GET['un'];
echo $id;
$select="select logid from caretaker where cid=$id";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
//$logid;
$update="update caretaker set status=1 where cid=$id"; 
$obj->exe($update);
$update1="update  login set utype='caretaker',status=1 where id=$logid"; 
$obj->exe($update1);
?>
<script>
		alert("Sucessfully Details Updated");
		window.location="newcare.php";
    </script>