<?php
include"db.php";
 $obj=new db();
 
 $delete= "delete from electionadd ";
 $obj->exe($delete);
 $delete1="delete from election ";
 $obj->exe($delete1);
 
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewele.php";
    </script>