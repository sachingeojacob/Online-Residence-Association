<?php
session_start();
$id=$_SESSION['id'];
include("db.php");
$obj=new db();
//$username=$_POST["uname"];
$elname=$_POST['elname'];
$candidateid=$_POST["can"];

$d=date('Y-m-d');

$sql1="select vote from election where elid=$candidateid";
$res1=$obj->exe($sql1);

$row=mysqli_fetch_array($res1);

$votecount=$row[0];
$vots="";
$vots=$votecount+1;







//$poll=$row[1];
//$poled=$poll+1;
//$sql="update election set vote=$vots where elid=$candidateid";
$sql2="insert into  election(elname,candidates,edate,vote,voterid)values('$elname','$candidateid','$d',$vots,$id)";

$obj->exe($sql2);
//$obj->exe($sql2);
?>
<script>
alert(' Successfully voted');
window.location="index.php";

</script>