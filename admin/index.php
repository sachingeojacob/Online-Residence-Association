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
	<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
						<?php
                         $count="select count(userid) from user where status=1";
						 $res=$obj->exe($count);
						 $row=mysqli_fetch_array($res);
						 
						 ?>
							<h5>Today</h5>
							<h4>Users</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $row[0];?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
						<?php
                         $count="select count(cid) from caretaker where status=1";
						 $res=$obj->exe($count);
						 $row=mysqli_fetch_array($res);
						 
						 ?>
							<h5>Today</h5>
							<h4>Caretakers</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $row[0];?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
						<?php
                         $count="select count(serid) from serpro";
						 $res=$obj->exe($count);
						 $row=mysqli_fetch_array($res);
						 
						 ?>
							<h5>Today</h5>
							<h4> Providers</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $row[0];?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
				
				<div class="row">
					
				<div class="row calender widget-shadow">
					<h4 class="title">Calender</h4>
					<div class="cal1">
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<?php
		include("footer.php");
		?>
	</div>
	<!-- Classie -->
		
</body>
</html>
<?php
 }
 else
 {
 ?>
 <script>
 alert("Invaid Login");
 window.location="../index.php#login";
 </script>
 <?php
 }
 ?>
 