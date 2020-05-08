<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname'];
	include("db.php");
$obj=new db(); 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Residence Admin Panel | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("header.php");
include("sidemenu.php");

?>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">New Users</h3>
					 <?php
		  $sql="select * from user where status=0";
		  $res=$obj->exe($sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
					<div class="panel-body widget-shadow">
						<table class="table">
							<thead>
						  <tr>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Phone</th>
							<th>House Number </th>
							<th>Username</th>
							<th>Action</th>
							
						  </tr>
						</thead>
						<tbody>
						<?php
			while($row=mysqli_fetch_array($res))
			{
		  ?>
						  <tr>
							<td><?php echo $row[1];?></td>
							<td><?php echo $row[2];?></td>
							<td><?php echo $row[3];?></td>
							<td><?php echo $row[4];?></td>
							<td><?php echo $row[5];?></td>
							<td><?php echo $row[6];?></td>
							
							<td><a href="ac.php?un=<?php echo $row[0]; ?>">Activate</a> / <a href="rejuser.php?un=<?php echo $row[0]; ?>">Reject</a></td>
						  </tr>
						</tbody>
					   <?php
			}
		  ?>
						</table>
						 <?php
			}
		  ?>
					</div>
		
		  </div>
		  </div>
		  </div>
		 </div>
		<!--footer-->
		<?php
		include("footer.php");
		?>
        <!--//footer-->
	</div>
	</body>
</html>
<?php
 }
 else
 {
 ?>
 <script>
 alert("Invaid Login");
 window.location="../index.php";
 </script>
 <?php
 }
 ?>