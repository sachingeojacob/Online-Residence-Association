<?php
include"db.php";
 $obj=new db();
 $cid=$_GET['un'];
 $sql="select logid from caretaker where cid=$cid";
 $res=$obj->exe($sql);
 $row=mysqli_fetch_array($res);
 $logid=$row[0];
// echo $logid;
 $delete="delete from caretaker where cid='$cid'";
 $obj->exe($delete);
 $delete1="delete from login where id=$logid";
 $obj->exe($delete1);
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="newcare.php";
    </script>>
