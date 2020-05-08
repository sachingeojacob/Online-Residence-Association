<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
error_reporting(0);
include("db.php");
$obj=new db();
$number=$_POST["sernum"];
$msg=$_POST["message"];
$id=$_POST["id"];

	require('textlocal.class.php');
 
	$Textlocal = new Textlocal(false, false, 'tF33Fhkpt8s-8PHxqZvC0eJuSwHmsWIFb30nl5VmZ9');//default false,then apikey from our account.
 
	$numbers = array($number);
	$sender = 'TXTLCL';//default this not try to change
	$message = $msg;
 
	$response = $Textlocal->sendSms($numbers, $message, $sender);
	print_r($response);
	
	
	$update="update serreq set status=1 where srid=$id";
$obj->exe($update);
?>
<script>
alert(' Successfully Send');
window.location="viewpend.php";

</script>
</body>
</html>
