<?php
session_start();
include("db.php");
$obj=new db();
$id=$_POST["id"];
$cpass=$_POST["cpass"];
$npass=$_POST["npass"];
$sql="select * from login where  password='$cpass' and user_id='$id'";
$res=$obj->exe($sql);
$no=mysqli_num_rows($res);
if($no>0)
{
	$sql1="update login set password='$npass' where user_id='$id'";
	$re=$obj->exe($sql1);
	?>	 <script>
		alert("password change successfully");
		window.location="changepass.php";
    </script>
	<?php }
else
{
	?>
    <script>
		alert("password not change try again");
		window.location="changepass.php";
    </script>
    <?php
}
?>