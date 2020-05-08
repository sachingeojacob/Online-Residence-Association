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
<title>Residence Caretaker Panel | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("dheader.php");
?>
</head>
<body>
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
							<?php
						
                         $count="select count(srid) from serreq where status=1";
						 $res=$obj->exe($count);
						 $row=mysqli_fetch_array($res);
						 
						 ?>
								<h3>Approved Requests</h3>
								<h4> <?php echo $row[0];?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
							<?php
							$count1="select count(srid) from serreq where status=0";
						 $res1=$obj->exe($count1);
						 $row1=mysqli_fetch_array($res1);
						 ?>
								<h3>Pending Requests</h3>
								<h4><?php echo $row1[0];?></h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
							<?php
							$count2="select count(serid) from serpro ";
						 $res2=$obj->exe($count2);
						 $row2=mysqli_fetch_array($res2);
						 ?>
								<h3>Providers</h3>
								<h4><?php echo $row2[0];?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
							<?php
							$count3="select count(srid) from serreq where status=1 ";
						 $res3=$obj->exe($count3);
						 $row3=mysqli_fetch_array($res3);
						 ?>
								<h3> Requests</h3>
								<h4><?php echo $row3[0];?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Statistics</h3>
	<div class="toolbar">
		<div class="pull-left">
			<div class="btn-group">
				<a href="#" class="btn btn-default btn-xs">Daily</a>
				<a href="#" class="btn btn-default btn-xs active">Monthly</a>
				<a href="#" class="btn btn-default btn-xs">Yearly</a>
			</div>
		</div>
		<div class="pull-right">
			<div class="btn-group">
			  <a aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Export <i class="fa fa-angle-down"></i>
			  </a>
			  
			</div>
			<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i></a>
		</div>
	</div>
</header>
<div class="agileits-box-body clearfix">
<div id="hero-area"></div>
</div>
</div>
</div>
	
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Residence. All Rights Reserved </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
		<?php
		include("dside.php");
		?>	
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
 