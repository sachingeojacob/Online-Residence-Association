<?php
include("db.php");
$obj=new db();
?>
<!DOCTYPE html>
<html>
<head>
<title>Societica A Entertainment Category Flat Bootstarp Resposive Website Template | Events :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Societica Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!---->
  <script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#example1 a').Chocolat();
		});
		</script>

</head>
<body> 
<!--header-->
<!--banner-->
	<div class="banner">
			
		</div>	
	<!---->
	<div class="header">
		<div class="container">			
			<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=" " /></a>
			</div>
			<div class="top-nav">			
					<span class="menu"> </span>
					<ul>
						<li class="active"><a href="index.php"  >HOME</a></li>
						<li><a href="viewnot.php" data-hover="NOTIFICATIONS">NOTIFICATIONS</a></li>
						<li><a href="serreq.php" data-hover="SERVICE REQUESTS">SERVICE REQUESTS</a></li>
						<li><a href="viewserpro.php" data-hover="SERVICE PROVIDERS">SERVICE PROVIDERS</a></li>
						<li><a href="viewele.php" data-hover="ELECTIONS">ELECTIONS</a></li>
						<li><a href="editprofile.php" data-hover="EDIT PROFILE">EDIT PROFILE</a></li>
						<li><a href="logout.php" data-hover="LOGOUT">LOGOUT</a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!--content-->
	<div class="content">
		<div class="container">
			<!---->
			<div class="events">
			<div class="event-top">
					<h3>Service Providers</h3>
				</div>
			
			<div class="number-text">
			<?php
		  $sql="select * from serpro";
		  $res=$obj->exe($sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
					    <table class="table table-condensed">
						<thead>
						  <tr>
							<th>Name</th>
							<th>Service</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Gender</th>
							<th>Address</th>
							
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
			
			
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>

	
		</div>
	</div>	
	<!--footer-->
	<div class="footer">
		<div class="container">
				<div class="foter-bottom">	
					<h3 class="follow">Follow Us On Social Networks :</h3>
					<ul class="social-ic-icons">
						<li class="facebook"><a href="#"><span> </span></a></li>
						<li class="twitter"><a href="#"><span> </span></a></li>
						<li class="gmail"><a href="#"><span> </span></a></li>
					</ul>
					<div class="clearfix"> </div>
					</div>
				 <p class="footer-grid">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	
		</div>
	</div>

</body>
</html>