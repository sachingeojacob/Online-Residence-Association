 <?php
 session_start();
 include"db.php";
 $obj=new db();
 $uname=$_POST['uname'];
 $pwd=$_POST['pwd'];
 $select="select * from login where username='$uname' and password='$pwd' and status='1'";
 $res=$obj->exe($select);
 $row=mysqli_fetch_array($res);
	$_SESSION['id']=$row['id'];
	$_SESSION['uname']=$row['username'];
	 if($row['usertype']=="admin")
	 { 
	 ?>
	 
	 <script>
window.location="admin/index.php";
</script>

<?php 
}
else if($row['usertype']=="user")
	 { 
	 ?>
	 
	 <script>
window.location="user/index.php";
</script>

<?php 
}
else if($row['usertype']=="caretaker")
	 { 
	 ?>
	 
	 <script>
window.location="caretaker/index.php";
</script>

<?php 
}
else
	 { 
	 ?>
	 
	 <script>
	 alert("Invalid Login");
window.location="login.php";
</script>

<?php 
}
?>