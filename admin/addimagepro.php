<?php
include("db.php");
$obj=new db();
$image=$_POST["image"];

if(isset($_POST['submit']))
{ 
$y=$_FILES['image']['name'];
$r=$_FILES['image']['tmp_name'];
move_uploaded_file($r,"../uploads/".$y);

} 

$sql="insert into gallery (image) values('$y')";
$obj->exe($sql);
//echo $sql;
?>
<script>
alert(' Sucessfully Details Added');
window.location="addimage.php";

</script>