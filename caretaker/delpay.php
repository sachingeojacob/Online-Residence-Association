<?php
include"db.php";
 $obj=new db();
 $id=$_GET['id'];
 
// echo $logid;
 $delete="delete from custpayment where id='$id'";
 $obj->exe($delete);

 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="payment.php";
    </script>